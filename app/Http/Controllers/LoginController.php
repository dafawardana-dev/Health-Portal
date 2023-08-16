<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
        //function index
        public function index()
        {
            return view('layouts.login.index');
        }

        //function authenticate
        public function authenticate(Request $request)
        {
            $request->validate([
               'email'=>'reuqired|email:dns',
               'password'=>'required'
            ]);

            dd('berhasil login!');
            // $credentials = $request->only('email', 'password');
            // if (auth()->attempt($credentials)) {
            //     $request->session()->regenerate();
            //     return redirect()->intended('/home');
            // }
            // return back()->withErrors([
            //     'email' => 'The provided credentials do not match our records.',
            // ]);
        }
}