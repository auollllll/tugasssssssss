<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function tampilRegistrasi() {
        return view('registrasi');
    }

    public function submitRegistrasi(Request $request){
        // Validasi data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email', // Validasi agar email unik
            'password' => 'required|min:6',
        ]);
    
        // Jika email sudah ada, tampilkan pesan error
        if (User::where('email', $request->email)->exists()) {
            return back()->with('error', 'Akun dengan email ini sudah terdaftar. Silakan login atau gunakan email lain.');
        }
    
        // Jika email belum ada, lanjutkan proses registrasi
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),  // Enkripsi password
        ]);
    
        return redirect()->route('login.tampil')->with('success', 'Registrasi berhasil. Silakan login.');
    }
    
    
    public function tampilLogin() {
        return view('login');
    }

    public function submitLogin(Request $request){
        $data = $request->only('email','password');
        // return $data;
        if (Auth::attempt($data)) {
            $request->session()->regenerate();
            return redirect()->route('dashboard');
        } else {
            return redirect()->back()->with('gagal', 'Email atau password salah');
        }
    }
}
