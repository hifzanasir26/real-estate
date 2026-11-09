<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function success()
{
    return view('frontend.payment-sucess'); // make sure the view file name is correct
}
}
