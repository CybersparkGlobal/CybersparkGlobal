<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\ConnectionException;

class AuthController extends Controller
{
    /**
     * Teacher Login with Remote Institute API & Detailed Error Logging
     */
    public function teacherLogin(Request $request)
    {
        $request->validate([
            'phone_or_email' => 'required|string',
            'password' => 'required',
            'institute_id' => 'required'
        ]);

        $jsonPath = base_path('institute_list.json');
        if (!file_exists($jsonPath)) {
            return response()->json(['status' => false, 'message' => 'Institute list not found.'], 500);
        }

        $institutes = json_decode(file_get_contents($jsonPath), true);
        $institute = collect($institutes)->firstWhere('id', (int)$request->institute_id);

        if (!$institute) {
            return response()->json(['status' => false, 'message' => 'The selected institute is invalid.'], 404);
        }

        try {
            $apiUrl = rtrim($institute['api_base_url'], '/') . '/teacher/login';


            $response = Http::withHeaders([
                    'Accept' => 'application/json',
                    'Content-Type' => 'application/json',
                    'User-Agent' => 'Laravel-HttpClient/1.0',
                ])
                ->withOptions([
                    'verify' => app()->environment('production'),
                ])
                ->timeout(60)
                ->post($apiUrl, [
                    'login' => $request->phone_or_email,
                    'password' => $request->password,
                ]);

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

            // Custom Error Messages based on status codes
            $statusCode = $response->status();
            $errorMessage = 'Invalid credentials or login failed.';

            if ($statusCode === 403) {
                $errorMessage = "Access Forbidden (403). The remote server blocked the request. Try adding User-Agent or check Firewall.";
            } elseif ($statusCode === 405) {
                $errorMessage = "Method Not Allowed (405). Check if the API endpoint supports POST.";
            } elseif ($statusCode === 404) {
                $errorMessage = "API Endpoint not found (404). Check the institute base URL.";
            }

            return response()->json([
                'status' => false,
                'message' => $errorMessage,
                'remote_status' => $statusCode,
                'server_error_detail' => $response->json() ?? $response->body()
            ], $statusCode);

        } catch (\Illuminate\Http\Client\ConnectionException $e) {
            \Log::error("Connection Exception: " . $e->getMessage());
            return response()->json([
                'status' => false,
                'message' => 'Could not connect to the server. Connection timed out or DNS issue.'
            ], 503);
        } catch (\Exception $e) {
            \Log::error('API Login General Error: ' . $e->getMessage());
            return response()->json([
                'status' => false,
                'message' => 'An unexpected error occurred: ' . $e->getMessage()
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
