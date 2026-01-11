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

        $institutes = json_decode(file_get_contents(base_path('institute_list.json')), true);
        $institute = collect($institutes)->firstWhere('id', (int)$request->institute_id);

        if (!$institute) {
            return response()->json(['status' => false, 'message' => 'Invalid institute'], 404);
        }

        try {
            // call institute login API with try-catch
            $response = Http::timeout(60)->post($institute['api_base_url'] . '/teacher/login', [
                'login' => $request->phone_or_email,
                'password' => $request->password,
            ]);

            if (!$response->successful()) {
                return response()->json([
                    'status' => false,
                    'message' => 'Invalid credentials or login failed'
                ], 401);
            }

            return response()->json([
                'status' => true,
                'token' => $response['token'],
                'user' => $response['user'],
                'institute' => $institute['name_en'],
                'api_base_url' => $institute['api_base_url']
            ]);

        } catch (ConnectionException $e) {

            return response()->json([
                'status' => false,
                'message' => 'Could not connect to the institute server. Please check the URL or try again later.'
            ], 503);
        } catch (\Exception $e) {

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
        $institutes = json_decode(file_get_contents(base_path('institute_list.json')), true);
        $institute = collect($institutes)->firstWhere('id', (int)$request->institute_id);

        // Return error if institute ID is not found in the list
        if (!$institute) {
            return response()->json(['status' => false, 'message' => 'Invalid institute'], 404);
        }

        try {
            // Call the specific institute's forgot-password API
            $response = Http::timeout(60)->post($institute['api_base_url'] . '/teacher/forgot-password-otp', [
                'login' => $request->phone_or_email,
            ]);

            // Scenario 1: The request was successful (OTP sent)
            if ($response->successful()) {
                $data = $response->json();
                return response()->json([
                    'status' => true,
                    'message' => $data['message'],
                    'email' => $data['email'],
                    'institute' => $institute
                ]);
            }

            // Scenario 2: The request failed (e.g., 404 Teacher Not Found or 500 Server Error)
            // We extract the message from the institute's response or provide a default one
            $errorData = $response->json();
            return response()->json([
                'status' => false,
                'message' => $errorData['message'] ?? 'The institute server returned an error. Please try again.',
                'debug_info' => config('app.debug') ? $errorData : null // Optional: Only show detailed error in debug mode
            ], $response->status());

        } catch (\Illuminate\Http\Client\ConnectionException $e) {
            // Scenario 3: Could not reach the institute server (Network/DNS issue)
            return response()->json([
                'status' => false,
                'message' => 'Could not connect to the institute server. Please check the network or try again later.'
            ], 503);
        } catch (\Exception $e) {
            // Scenario 4: Any other unexpected code exceptions
            return response()->json([
                'status' => false,
                'message' => 'An unexpected error occurred: ' . $e->getMessage()
            ], 500);
        }
    }
}
