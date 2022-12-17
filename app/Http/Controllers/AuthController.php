<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->route('dash')
                        ->with('success', 'You have signed in successfully.');
        }
        return redirect()->route('login')->with('error', 'Login details are not valid');
    }

    public function dash(){
        return view('tenant.dash');
    }

    public function logout(){
        Session::flush();        
        Auth::logout();
        return redirect()->route('login')->with('success', 'User has been logged out successfully.');
    }
}
