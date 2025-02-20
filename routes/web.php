<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

// users

Route::get('/index', function () {
    return view('users.index', ['title' => 'Home Page']);
});
Route::get('/bikes', function () {
    return view('users.bikes', ['title' => 'Sell Bikes']);
});
Route::get('/cars', function () {
    return view('users.cars', ['title' => 'Sell Cars']);
});
Route::get('/about', function () {
    return view('users.about', ['title' => 'About Us']);
});

// admin
Route::get('/indexs', function () {
    return view('admin.index', ['title' => 'Home Page']);
});
Route::get('/bikez', function () {
    return view('admin.bikez', ['title' => 'Bikes']);
});




// auth
Route::middleware('auth')->group(function () {
    Route::get('/profile', function () {
        return view('users.profile', ['title' => 'User Profile']);
    });
});

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::get('/', [AuthController::class, 'showLoginForm'])->name('login');

Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth')->group(function (){
    Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});