<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class siteController extends Controller
{

    function showIndex() {
        return view('site.master');
    }

    function showHome() {
        return view('site.home');
    }

    function showProfile() {
        return view('site.profile');
    }

    
}
