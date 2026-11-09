<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\properties;
use App\Models\detail;
use App\Models\User;
class AdminDashboardController extends Controller
{
   public function index(){
        $totalusers = User::where('role', 'user')->count(); // ✔ only normal users

    $property = properties::count();
     $detaildata = detail::latest()->get();
    return view('admindashboard.index', compact('property', 'detaildata', 'totalusers'));
}

}
