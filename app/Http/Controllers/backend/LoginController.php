<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function login(){
        return view('frontend.login');
    }

    public function store(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            return redirect()->route('home.index'); // Redirect to home page after successful login
        }

        return redirect()->route('login')->withErrors([
            'login' => 'Invalid  password.',
        ]);
    }

    public function logout(Request $request)
    {
        // if(Auth::user()->role == 'User'){
        Auth::logout();
      
        return redirect()->route('login');
        // }
    }

}
