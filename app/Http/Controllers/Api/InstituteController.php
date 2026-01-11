<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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




}
