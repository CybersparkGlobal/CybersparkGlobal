<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class ServicesController extends Controller
{
    //
    function index()
    {
        return view('frontend.services.index');

    }
}
