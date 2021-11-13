<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
//$user = Auth::user();

class LoginController extends Controller
{
    
    public function login()
    {
        if (Auth::check()) {
            return redirect('/');
        }else {
            return view('login.login', [
                'title' => 'login'
            ]);
        }
    }

    public function actionlogin(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        if (Auth::attempt($data)) {
            $request->session()->regenerate();

            return redirect()->intended('/');
        }
        return back()->with('logineror' , 'Login Failed');
    }

    public function actionlogout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}