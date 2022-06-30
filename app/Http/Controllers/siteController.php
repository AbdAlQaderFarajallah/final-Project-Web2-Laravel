<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class siteController extends Controller
{

    function showIndex() {
        return view('site.master');
    }


    function Profile() {
        return view('site.profile');
    }


    function home(){
        return view('site.home');
    }

    
}
