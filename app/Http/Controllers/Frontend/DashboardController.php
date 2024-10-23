<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    function index()
    {
        $data['banners'] = Banner::where('status','active')->latest()->get();
        return view('welcome',compact('data'));
    }
}
