<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    //
    function index(){
        return view('frontend.contact_us.index');
    }
}
