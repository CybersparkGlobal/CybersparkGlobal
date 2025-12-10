<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class SeoController extends Controller
{
    // 1. Existing function for the /seo page
    public function index()
    {
        return view('frontend.seo.index');
    }

    // 2. The new function for the /durban page
    public function durbanIndex()
    {
        return view('frontend.seo.seo_durban');
    }
}
// Make sure this is the only closing curly brace for the class!
