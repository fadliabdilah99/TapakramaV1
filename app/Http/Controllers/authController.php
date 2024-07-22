<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Session\Session as SessionSession;

class authController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function registers()
    {
        return view('auth.register');
    }

    public function validasi(Request $request)
    {
       $request->validate([
            "email" => "required",
            "password" => "required",
        ]);

        $data = [
            "email" => $request->email,
            "password" => $request->password,

        ];
        if (Auth::attempt($data)) {
            if (Auth::user()->role == 'admin') {
                return redirect('admin');
            }else{
                return redirect('/');
            }
        } else {
            return redirect('login')->with('failed', 'Email atau Password salah');
        }
    }


    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed|min:6',
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password), // Menggunakan kolom 'password' dan melakukan hashing
        ];

        User::create($data);

        $login = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($login)) {
            return redirect('login');
        } else {
            return redirect('register')->with('failed', 'Email atau password salah');
        }
    }

    protected $attributes = [];
    public function flush()
    {
        $this->attributes = [];
    }


    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
     
        $request->session()->invalidate();
     
        $request->session()->regenerateToken();
     
        return redirect('/');
    }
}
