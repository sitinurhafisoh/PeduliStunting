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

// Rute untuk signup dengan nama 'Daftar.signup'
Route::get('/signup', [RegisterController::class, 'signup'])->name('Daftar.signup');
