<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class AuthController extends Controller
{
    function showRegister(){
        return view('authentication.register'); #Register
    }

    function showLogin(){
        return view('authentication.login'); #login
    }

    function performRegister(Request $request){ #performRegister name dati ng func
        $request->validate([
            'name' => 'required|string|max:255',
            'email'     => 'required|email|unique:users',
            'password'  => 'required|min:6|confirmed' #used in laravel 11
        ]);

        User::create([
            'name' => $request->name,
            'email'     => $request->email,
            'password'  => Hash::make($request->password)
        ]);
        return redirect()->route('login.form')->with('success','Registration successfull!');
    }
    
    function performLogin(Request $request){ #performLogin name dati ng func
        
    }
}


