<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\NutritionController;
use App\Http\Controllers\BabyDataController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\LandingPageController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User; // Pastikan model User di-import jika belum ada




// Rute untuk halaman landing page
Route::get('/', function () { 
    return view('landingpage'); 
});

Route::get('/', [LandingPageController::class, 'showLandingPage'])->name('landingpage');

// Rute untuk signup dengan nama 'Daftar.signup'
Route::get('/signup', [RegisterController::class, 'signup'])->name('Daftar.signup');

Route::get('/signup', function () {
    return view('Daftar.signup');
})->name('signup');

Route::post('/signup', function (Illuminate\Http\Request $request) {
    // Proses signup
})->name('signup.submit');

Route::post('/signup', function (Request $request) {
    $validatedData = $request->validate([
        'namaLengkap' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email',
        'nomorTelepon' => 'required|string|max:15',
        'kataSandi' => 'required|string|min:8|confirmed',
        'role' => 'required|string',
    ]);

    // Buat pengguna baru
    User::create([
        'NM_Lengkap' => $validatedData['namaLengkap'],
        'email' => $validatedData['email'],
        'No_Tlpn' => $validatedData['nomorTelepon'],
        'sandi' => bcrypt($validatedData['kataSandi']), // Enkripsi kata sandi
        'role' => $validatedData['role'],
    ]);

    return redirect()->route('signup')->with('success', 'Registration successful!');
})->name('signup.submit');


// Rute untuk halaman login
Route::get('/login', function () {
    return view('Daftar.login'); // Sesuaikan dengan lokasi file login
})->name('login');

// Rute untuk memproses form login
Route::post('/login', function (Request $request) {
    // Validasi data
    $validatedData = $request->validate([
        'email' => 'required|email',
        'password' => 'required|string',
    ]);

    // Cek kredensial pengguna
    if (Auth::attempt(['email' => $validatedData['email'], 'password' => $validatedData['password']])) {
        // Ambil peran pengguna
        $user = Auth::user();

        // Arahkan ke halaman berdasarkan role
        if ($user->role === 'admin') {
            return redirect()->route('dashboard_admin'); // Rute untuk dashboard admin
        } elseif ($user->role === 'parent') {
            return redirect()->route('dashboard_parent'); // Rute untuk dashboard parent
        }
    }

    return back()->withErrors([
        'email' => 'Email atau kata sandi salah.',
    ]);
})->name('login.submit');

// Rute untuk dashboard admin
Route::get('/dashboard_admin', function () {
    return view('dashboard.admin'); // Sesuaikan dengan lokasi file dashboard admin
})->name('dashboard_admin');

// Rute untuk dashboard parent
Route::get('/dashboard_parent', function () {
    return view('dashboard.parent'); // Sesuaikan dengan lokasi file dashboard parent
})->name('dashboard_parent');

//rute kelola 
Route::get('/', function () {
    return view('home');
});
Route::get('/mpasi/manage', [App\Http\Controllers\RecipeController::class, 'index'])->name('recipes.index');
Route::get('/mpasi/create', [App\Http\Controllers\RecipeController::class, 'create'])->name('recipes.create');
Route::post('/mpasi', [App\Http\Controllers\RecipeController::class, 'store'])->name('recipes.store');
Route::get('/recipes/{recipe}/edit', [App\Http\Controllers\RecipeController::class, 'edit'])->name('recipes.edit');
Route::put('/recipes/{recipe}', [App\Http\Controllers\RecipeController::class, 'update'])->name('recipes.update');
Route::delete('/recipes/{recipe}', [App\Http\Controllers\RecipeController::class, 'destroy'])->name('recipes.destroy');
