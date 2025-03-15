<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthManualController extends Controller
{
    public function index()
    {
        //
        return view('auth-manual.login');
    }

    public function loginProses(Request $request) 
    {
        //validasi dengan credentials
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        //proses login berhasil
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->Route('kategori.index');
        }

        //proses login gagal
        if (!Auth::attempt($credentials)) {
            return back()->withErrors([
                'email' => 'Email atau password salah!',
                'password' => 'Email atau password salah!'
            ]);
        }
    }

    

    public function logout(Request $request)
    {
        //
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->Route('login');
    }

}
