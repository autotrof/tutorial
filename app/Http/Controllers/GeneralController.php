<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GeneralController extends Controller
{
    public function loginPage()
    {
        return view('login');
    }

    public function loginCek()
    {
        request()->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $loginBerhasil = Auth::attempt([
            'email' => request('email'),
            'password' => request('password')
        ]);

        if ($loginBerhasil) {
            return response()->json("Login berhaisl");
        }

        return response()->json("Email atau password tidak sesuai", 403);
    }
}
