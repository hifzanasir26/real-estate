<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CustomForgotController extends Controller
{
    public function showForm()
    {
        return view('frontend.custom-forgot-password'); 
    }

    public function sendConfirmation(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        $user = User::where('email', $request->email)->first();
        if (!$user) return back()->withErrors(['email' => 'Email not found.']);

        $token = Str::random(64);

        // Store token manually
        DB::table('password_resets')->updateOrInsert(
            ['email' => $user->email],
            [
                'token' => $token,
                'created_at' => now()
            ]
        );

        // Send confirmation mail
        Mail::send('frontend.confirm-reset-link', [
            'token' => $token,
            'email' => $user->email,
            'type' => $user->role // <- Pass role
        ], function ($message) use ($user) {
            $message->to($user->email);
            $message->subject('Confirm Password Reset Request');
        });

        return back()->with('status', 'A confirmation link has been sent to your email.');
    }

    public function showResetForm($token, Request $request)
    {
        $email = DB::table('password_resets')->where('token', $token)->value('email');
        if (!$email) {
            return redirect()->route('custom.forgot')->withErrors(['email' => 'Invalid or expired token.']);
        }

        $user = User::where('email', $email)->first();
        $type = $user && $user->role === 'admin' ? 'admin' : 'user';

        return view('frontend.custom-reset-password', [
            'token' => $token,
            'email' => $email,
            'type' => $type
        ]);
    }


    public function updatePassword(Request $request)
    {
        $request->validate([
            'token'    => 'required',
            'email'    => 'required|email',
            'password' => 'required|confirmed|min:8'
        ]);

        $email = DB::table('password_resets')->where('token', $request->token)->value('email');
        if (!$email || $email !== $request->email) {
            return back()->withErrors(['email' => 'Invalid reset token.']);
        }

        $user = User::where('email', $request->email)->first();
        $user->password = Hash::make($request->password);
        $user->save();

        DB::table('password_resets')->where('email', $request->email)->delete();

        if ($user->role === 'admin') {
            return redirect()->route('admin.login')->with('status', 'Password reset successful!');
        } else {
            return redirect()->route('login')->with('status', 'Password reset successful!');
        }
    }
}
