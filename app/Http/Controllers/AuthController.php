<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function login(Request $request)
    {   
        $request->validate([
            'email'     => 'email|required',
            'password'  => 'required'
        ],
    [
        'email.email'   => 'Kolom Email harus diisi dengan email yang valid!',
        'email.required'   => 'Kolom Email tidak boleh kosong!',
        'password.required' => 'Kolom Password tidak boleh kosong!'
    ]);

        $remember = $request->remember ? true :false;

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $remember)) {
            
            $request->session()->regenerate();


            return redirect()->intended('/siswa')->with('success', 'Selamat! Anda berhasil login');
        }

        return back()->withErrors([
            'email' => 'Email atau password salah'
        ]);
    }


    public function logout(Request $request)
    {
        Auth::logout();


        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('login')->with('success', 'Selamat! Anda berhasil logout');
    }
}
