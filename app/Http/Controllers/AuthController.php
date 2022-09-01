<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        return view('auth.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:3|max:255'
        ]);

        $remember = isset($request->remember_me);

        if (Auth::guard('members')->attempt($credentials, $remember)) {
            $request->session()->regenerate();

            return redirect()->intended('/');
        }

        $request->flashOnly(['email', 'remember_me']);

        return back()->withErrors([
            'loginErr' => 'Email dan password tidak cocok.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
