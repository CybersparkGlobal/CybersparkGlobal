<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class TestimonialController extends Controller
{
    function index()
    {
        return view('frontend.testimonial.index');
    }
}
