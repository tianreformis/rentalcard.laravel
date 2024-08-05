<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function index()
    {
        return view('login.index');
    }

    public function proses(Request $request)
    {
        $credential = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ], [
            'email.required' => 'Email tidak boleh kosong!',
            'email.email' => 'Format email tidak benar!',
            'password.required' => 'Password tidak boleh kosong!',
        ]);

        if (Auth::attempt($credential)) {
            $request->session()->regenerate(); //digunakan untuk menyimpan informasi login
            return redirect()->route('home'); //diarahkan ke halaman awal
        }

        return back()->withErrors([
            'email' => 'Email atau Password tidak sesuai!'

        ])->onlyInput('email');
    }
    public function keluar(Request $request)
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect()->route('login');
    }
}
