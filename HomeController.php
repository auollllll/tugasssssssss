<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function registrasi()
    {
        return view('index'); // ganti dengan view yang sesuai
    }
    public function tampil() {
        return view('index');
    }
    
}