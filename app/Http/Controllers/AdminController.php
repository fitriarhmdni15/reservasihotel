<?php

// app/Http/Controllers/AdminController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;

class AdminController extends Controller
{
    // Menampilkan form login admin
    public function showLoginForm()
    {
        return view('admin.login');
    }

    // Proses login admin
    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        // Cek kredensial admin
        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('admin.dashboard');
        } else {
            return redirect()->back()->withErrors(['email' => 'Email atau Password salah!']);
        }
    }

    // Dashboard Admin
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    // Logout Admin
    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }
}
