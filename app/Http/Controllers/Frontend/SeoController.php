<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class SeoController extends Controller
{
    public function index()
    {
        return view('frontend.seo.index');
    }
}
