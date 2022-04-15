<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }

    public function authenticate(Request $request){
        $credentials = $request->validate([
            // 'username' => 'required|unique:users',
            // 'password' => 'required|min:8|confirmed|regex:/[A-Z]/i|regex:/[0-9]/|regex:/[^A-Z0-9]/i'
            'username' => 'required',
            'password' => 'required'

        ]);
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }

        return back() ->with('loginError', 'Login Failed');

    }

    public function logout(){
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/');


    }
}
