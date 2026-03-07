<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CollegeManagementController extends Controller
{
    public function index()
    {
        // This looks for a file at resources/views/frontend/college/index.blade.php
        return view('frontend.college.index');
    }
}
