<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    // Menampilkan halaman landing untuk orang tua
    public function landingPage()
    {
        // Periksa apakah pengguna sudah login
        if (Auth::check()) {
            // Jika pengguna adalah orang tua
            $user = Auth::user();
            if ($user->role == 'parent') {
                // Menampilkan halaman landing untuk orang tua
                return view('landing', ['menu' => $this->getMenu()]);
            } elseif ($user->role == 'admin') {
                // Jika pengguna adalah admin, arahkan ke dashboard
                return redirect()->route('admin.dashboard');
            }
        }

        // Jika belum login, arahkan ke halaman login
        return redirect()->route('login');
    }

    // Menampilkan halaman dashboard admin
    public function dashboard()
    {
        // Menampilkan dashboard untuk admin
        return view('admin.dashboard');
    }

    // Mendapatkan menu untuk orang tua
    private function getMenu()
    {
        return [
            'Home' => route('landing'),
            'Service' => '#',
            'Artikel Stunting' => '#',
            'Resep MP-ASI' => '#',
            'Nutrisi Ibu Hamil' => '#',
            'Data Bayi' => '#',
        ];
    }
}
