<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class AboutUsController extends Controller
{
    //
    function index()
    {
     return view('frontend.about_us.index');
    }
}
