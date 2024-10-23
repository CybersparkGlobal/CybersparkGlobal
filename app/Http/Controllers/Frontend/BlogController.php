<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    //
    function index()
    {
        return view('frontend.blog.index');
    }

    function singleBlog()
    {
        return view('frontend.blog.single');
    }
}
