<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\ConnectionException;

class AuthController extends Controller
{
    public function teacherLogin(Request $request)
    {
        $request->validate([
            'phone_or_email' => 'required|string',
            'password' => 'required',
            'institute_id' => 'required'
        ]);

        $jsonPath = base_path('institute_list.json');
        $institutes = json_decode(file_get_contents($jsonPath), true);
        $institute = collect($institutes)->firstWhere('id', (int)$request->institute_id);

        if (!$institute) {
            return response()->json(['status' => false, 'message' => 'The selected institute is invalid.'], 404);
        }

        if (app()->environment('production')){
            // Basic URL validation to ensure it starts with https
            if (!str_starts_with($institute['api_base_url'], 'https')) {
                return response()->json([
                    'status' => false,
                    'message' => 'Insecure connection detected. Please ensure the institute API URL uses HTTPS.'
                ], 400);
            }
        }

        try {

                $response = Http::withHeaders([
                    'Accept' => 'application/json',
                    'Content-Type' => 'application/json',
                ])
                    ->withOptions([
                        'verify' => app()->environment('production'),
                    ])
                    ->timeout(60)
                    ->post(rtrim($institute['api_base_url'], '/') . '/teacher/login', [
                        'login' => $request->phone_or_email,
                        'password' => $request->password,
                    ]);


            // Check for 405 Method Not Allowed error
            if ($response->status() === 405) {
                return response()->json([
                    'status' => false,
                    'message' => 'Method not allowed. Please ensure you are using a secure HTTPS connection for the institute API URL.'
                ], 405);
            }

            if ($response->successful()) {
                $data = $response->json();
                return response()->json([
                    'status' => true,
                    'token' => $data['token'] ?? null,
                    'user' => $data['user'] ?? null,
                    'institute' => $institute['name_en'],
                    'api_base_url' => $institute['api_base_url']
                ]);
            }

            return response()->json([
                'status' => false,
                'message' => 'Invalid credentials or login failed.',
                'server_error' => $response->json()
            ], $response->status());

        } catch (\Illuminate\Http\Client\ConnectionException $e) {
            return response()->json([
                'status' => false,
                'message' => 'Could not connect to the server. Please check if the URL is correct and uses HTTPS.'
            ], 503);
        } catch (\Exception $e) {
            \Log::error('API Login Error: ' . $e->getMessage());
            return response()->json([
                'status' => false,
                'message' => 'An unexpected error occurred. Please try again later.'
            ], 500);
        }
    }

    public function teacherForgotPassword(Request $request)
    {
        // Validate the input from the mobile app
        $request->validate([
            'phone_or_email' => 'required|string',
            'institute_id' => 'required'
        ]);

        // Load institutes from the JSON file
        $jsonPath = base_path('institute_list.json');
        if (!file_exists($jsonPath)) {
            return response()->json(['status' => false, 'message' => 'Institute list file missing.'], 500);
        }

        $institutes = json_decode(file_get_contents($jsonPath), true);
        $institute = collect($institutes)->firstWhere('id', (int)$request->institute_id);

        if (!$institute) {
            return response()->json(['status' => false, 'message' => 'Invalid institute'], 404);
        }

        if (app()->environment('production')) {
            if (!str_starts_with($institute['api_base_url'], 'https')) {
                return response()->json([
                    'status' => false,
                    'message' => 'Insecure connection detected.'
                ], 400);
            }
        }

        try {
            // Increased timeout to 120 seconds because email/OTP services can be slow
            $response = Http::withHeaders([
                'Accept' => 'application/json',
                'Content-Type' => 'application/json',
            ])
                ->withOptions([
                    'verify' => app()->environment('production'),
                ])
                ->timeout(120) // Increased from 60 to 120
                ->connectTimeout(30) // Wait 30s to establish the initial connection
                ->post(rtrim($institute['api_base_url'], '/') . '/teacher/forgot-password-otp', [
                    'login' => $request->phone_or_email,
                ]);

            if ($response->successful()) {
                $data = $response->json();
                return response()->json([
                    'status' => true,
                    'message' => $data['message'] ?? 'OTP sent successfully.',
                    'email' => $data['email'] ?? null,
                    'institute' => $institute['name_en']
                ]);
            }

            return response()->json([
                'status' => false,
                'message' => $response->json()['message'] ?? 'The institute server returned an error.',
                'debug_info' => config('app.debug') ? $response->json() : null
            ], $response->status());

        } catch (\Illuminate\Http\Client\ConnectionException $e) {
            // Specifically catch timeout and connection issues
            \Log::error('Timeout/Connection Error: ' . $e->getMessage());
            return response()->json([
                'status' => false,
                'message' => 'The institute server is taking too long to respond. Please check back later.'
            ], 504); // 504 Gateway Timeout
        } catch (\Exception $e) {
            \Log::error('General Error: ' . $e->getMessage());
            return response()->json([
                'status' => false,
                'message' => 'An unexpected error occurred.'
            ], 500);
        }
    }
}
