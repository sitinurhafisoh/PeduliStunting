<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\NutritionController;
use App\Http\Controllers\BabyDataController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Auth;


// Rute untuk halaman landing page
Route::get('/', function () {
    return view('landingpage'); 
});

Route::get('/signup', [RegisterController::class, 'signup'])->name('Daftar.signup');

// Rute untuk halaman signup yang ada di dalam folder Daftar
Route::get('/signup', function () {
    return view('Daftar.signup'); // Mengarah ke file signup.blade.php di dalam folder Daftar
});


// Artikel
Route::resource('articles', ArticleController::class);
Route::get('/articles/manage', [ArticleController::class, 'manage']);


// Resep MP-ASI
Route::resource('recipes', RecipeController::class);

// Nutrisi Ibu Hamil
Route::resource('nutritions', NutritionController::class);

// Data Bayi
Route::resource('baby-data', BabyDataController::class);

Route::get('/signup', function () {
    return view('signup');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
