<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Models\User;

class AdminRegisterController extends Controller
{
    public function register(){
        return view('frontend.adminregister');
    }
    public function store(Request $request)
{
    if (User::where('role', 'Admin')->exists()) {
        return redirect()->back()->with('error', 'Admin already exists. Only one admin is allowed.');
    }

    $data = new User();
    $data->name = $request->name;
    $data->email = $request->email;
    $data->password = Hash::make($request->password); // secure password
    $data->role = 'Admin';
    $data->save();

    return redirect()->route('admin.login');
}
}
