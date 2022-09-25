<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
use App\Models\User;

class AuthController extends Controller
{
    public function login () {
        return view ('login');
    }

    public function prosesLogin(Request $request) {
       
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('beranda');
        } 
        return back()->withErrors([
            'loginError' => 'Email dan Password Salah!',
        ]);
    }
}
