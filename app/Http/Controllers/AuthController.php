<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{

    public function login()
    {
        return view('site.master');
    }




    public function authenticate(Request $request)
    {
        if (Auth::attempt(['name' => $request->name, 'password' => $request->password])) {
            return redirect('/post');
        } else {
            return redirect('/login');
        }
    }




    public function logout()
    {
        if (Auth::check()) {
            Auth::logout();
        }
        return redirect()->route('site.master');
    }


    public function store(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect()->route('site.master');
    }
}
