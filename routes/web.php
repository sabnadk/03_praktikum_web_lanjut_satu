<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/profile/{nim}', function ($nim) {
    return view('profile', ['nim'=> $nim]);
});

Route::get('/experience', function () {
    return view('experience');
});


Auth::routes();



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Route Biasa - Home 
Route::get('/home', [PageController::class, 'home']);

// Route Prefix - Product
Route::prefix('product')->group(function () {
    Route::get('/productOne', [PageController::class, 'product']);
});

// Route Param - News
Route::get('/news/{id}', [PageController::class, 'news']);

// Route Prefix - Program
Route::prefix('program')->group(function () {
    Route::get('/terbaru', [PageController::class, 'program']);
});

// Route Biasa - About Us
Route::get('/about', [PageController::class, 'about']);

// Route Biasa - contact
Route::get('/contact', [PageController::class, 'contact']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');