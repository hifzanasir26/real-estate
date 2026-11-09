<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // ✅ Fixed typo: "Faceds" -> "Facades"
use Illuminate\Support\Facades\Validator;
use App\Models\User;


class UserController extends Controller
{

    public function register(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255', // ✅ Fixed invalid rule 'request'
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed|min:6',
        ]);

        $data['password'] = bcrypt($data['password']); // ✅ Hash the password
        $user = User::create($data);

        if ($user) {
            return redirect()->route('login');
        }

        return back()->withErrors(['error' => 'Registration failed.']);
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required', // ✅ Removed 'confirmed' (only used during registration)
        ]);

        if (Auth::attempt($credentials)) {
            return redirect()->route('dashboard');
        }

        return back()->withErrors(['email' => 'Invalid credentials.']);
    }

    public function dashboard()
    {
        if (Auth::check()) {
            return view('dashboard');
        }else{

        return redirect()->route('login');
        }
    }
    public function logout()
    {
    Auth::logout();
            return view('login');
        }
        
}
