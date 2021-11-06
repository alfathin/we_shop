<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegisterController extends Controller
{
    public function register()
    {
        return view('register.register', [
            'title' => 'Register'
        ]);
    }

    public function actionregister(Request $request)
    {
        $registerData = $request->validate([
            'name' => 'required|max:255',
            'username' => ['required', 'min:3', 'max:255', 'unique:users'],
            'email' => ['required', 'email:dns', 'unique:users'],
            'password' => 'required|min:5|max:16'
        ]);

        $registerData['password'] = Hash::make($registerData['password']);

        User::create($registerData);

        return redirect('/login')->with('success', 'Registrasion Was Successfull! Please Login');
    }

}
