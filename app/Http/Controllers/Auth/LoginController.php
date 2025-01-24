<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

// class LoginController extends Controller
// {
//     // Menampilkan halaman login
//     public function showLoginForm()
//     {
//         return view('auth.login');
//     }

//     // Menangani login
//     public function login(Request $request)
//     {
//         // Validasi input email dan password
//         $this->validateLogin($request);

//         // Cek kredensial dan login
//         if (Auth::attempt($request->only('email', 'password'), $request->filled('remember'))) {
//             // Jika login berhasil, redirect ke halaman dashboard atau halaman yang diinginkan
//             return redirect()->intended(route('dashboard'));
//         }

//         // Jika gagal, kembali ke halaman login dengan error message
//         return back()->withErrors([
//             'email' => 'The provided credentials do not match our records.',
//         ]);
//     }

//     // Validasi input login
//     protected function validateLogin(Request $request)
//     {
//         // Menambahkan validasi untuk email dan password
//         $request->validate([
//             'email' => ['required', 'email'],
//             'password' => ['required'],
//         ]);
//     }

//     // Logout pengguna
//     public function logout(Request $request)
//     {
//         Auth::logout();

//         // Redirect setelah logout
//         return redirect('/login');
//     }
// }

