<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class RegisterController extends Controller
{
    Public function index(){
        return view('register');
    }

    Public function store(Request $request){
        $validateData = $request->validate([
            'name'=>'max:255|unique:users',
            'email'=>'email:dns|unique:users',
            'password' => 'required|min:8|confirmed|regex:/[A-Z]/i|regex:/[0-9]/|regex:/[^A-Z0-9]/i',
            'username'=>'required|min:4|max:255|unique:users',
            'dob' => 'required',
            'telepon'=> 'required',
        ]);

        $validateData['password'] = bcrypt($validateData['password']);
        // dd('Berhasil');
        User::create($validateData);

        return redirect('/login');
    }


}
