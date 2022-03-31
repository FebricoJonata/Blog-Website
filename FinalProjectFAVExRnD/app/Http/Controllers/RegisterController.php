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
            'name'=>'max:255|unique:user',
            'email'=>'email:dns|unique:users',
            // 'password'=>'confirmed|min:8->mixedCase()->numbers()->symbols()',
            'password' => 'min:8',
            'confirmPassword'=>'required|min:8',
            'username'=>'required|min:4|max:255|unique:user',
            'dob' => 'required',
            'telepon'=> 'required',
        ]);
        // dd('Berhasil');
        User::create($validateData);

    }


}
