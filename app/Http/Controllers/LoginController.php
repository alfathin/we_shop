<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use session;
//$user = Auth::user();

class LoginController extends Controller
{
    public function home()
    {
        return view('home', [
            'title' => 'home'
        ]);
    }

    public function login()
    {
        if (Auth::check()) {
            return redirect('home');
        }else {
            return view('login.login', [
                'title' => 'login'
            ]);
        }
    }

    public function actionlogin(Request $request)
    {
        $data = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        if (Auth::attempt($data)) {
            $request->session()->regenerate();

            return redirect('home', [
                'title' => 'home'
            ]);
        }else {
            Session::flash('error', 'email atau password salah');
            return redirect('login.login', [
                'title' => 'login'
            ]);
        }
    }

    public function actionlogout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('login.login', [
            'title' => 'login'
        ]);
    }
}