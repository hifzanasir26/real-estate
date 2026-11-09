<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function register(){
        return view('frontend.register');
    }
    public function store(Request $request){
        $data = new User();
        $data -> name = $request->name;
        $data -> email = $request->email;
        $data -> password = $request->password;
        $data->role =  'User';
        $data->save();
        return redirect()->route('login');

    }
}
