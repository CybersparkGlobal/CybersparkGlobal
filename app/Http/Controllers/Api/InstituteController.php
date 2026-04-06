<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class InstituteController extends Controller
{
    public function lists()
    {
        $path = base_path('institute_list.json');

        if (!file_exists($path)) {
            return response()->json([
                'status' => false,
                'message' => 'Institute list file not found',
                'path' => $path
            ], 404);
        }

        $content = file_get_contents($path);
        $institutes = json_decode($content, true);
        $activeInstitutes = collect($institutes)
            ->where('status', 1)
            ->values();

        if (json_last_error() !== JSON_ERROR_NONE) {
            return response()->json([
                'status' => false,
                'message' => 'Invalid JSON format',
                'error' => json_last_error_msg()
            ], 500);
        }

        return response()->json([
            'status' => true,
            'data' => $activeInstitutes
        ]);
    }
    public function getLogo(Request $request)
    {

        $request->validate([
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

            $apiUrl = rtrim($institute['api_base_url'], '/') . '/get/logo';


            $response = Http::withHeaders([
                'Accept' => 'application/json',
                'User-Agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36',
            ])
                ->withOptions([
                    'verify' => app()->environment('production'),
                ])
                ->timeout(30)
                ->get($apiUrl);

            if ($response->successful()) {
                $data = $response->json();
                return response()->json([
                    'status' => true,
                    'logo_url' => $data['logo_url'] ?? $institute['logo'],
                    'institute_name' => $institute['name_en'],
                    'institute'=>$institute,

                ]);
            }
            return response()->json([
                'status' => false,
                'message' => 'Failed to fetch logo from remote server.',
                'remote_status' => $response->status()
            ], $response->status());

        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Error: ' . $e->getMessage()
            ], 500);
        }
    }



}
