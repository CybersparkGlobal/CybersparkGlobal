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
}
