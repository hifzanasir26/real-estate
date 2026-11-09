<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AdminLoginController extends Controller
{
    public function login(){
        return view('frontend.adminlogin');
    }
     public function store(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            // Allow only admins
            if ($user->role === 'Admin') {
                return redirect()->route('admin.index');
            } else {
                Auth::logout();
                return redirect()->route('admin.login')->withErrors([
                    'access' => 'Access denied. Only admins are allowed.',
                ]);
            }
        }

        return redirect()->route('admin.login')->withErrors([
            'login' => 'Invalid credentials.',
        ]);
    }

    public function adminlogout(Request $request)
    {
        if(Auth::user()->role == 'Admin'){
        Auth::logout();
     
        return redirect()->route('admin.login');
        }
    }
}


