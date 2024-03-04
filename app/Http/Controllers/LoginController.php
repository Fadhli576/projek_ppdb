<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function authanticate(Request $request)
    {
        $login = $request->validate([
            'email' => 'required|exists:users,email',
            'password' => 'required',
        ],[
            'email.exists' => 'email ini belum tersedia',
            'email.required' => 'email harus diisi',
            'password.required' => 'password harus diisi',
        ]);


        if (Auth::attempt($login)) {
            $request->session()->regenerate();
            return redirect('/dashboard');
        }else {
            return redirect()->back()->with('error', 'Gagal login, silahkan cek dan coba lagi!');
        }

    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
