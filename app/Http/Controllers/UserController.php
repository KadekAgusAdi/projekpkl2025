<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // Fungsi untuk menampilkan halaman dashboard user
    public function dashboard()
    {
        return view('user.dashboarduser');
        // ini akan memanggil file resources/views/user/dashboarduser.blade.php
    }
}
