<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BikeController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\PeopleController;

// users

Route::get('/index', function () {
    return view('users.index', ['title' => 'Home Page']);
});
Route::get('/bike', function () {
    return view('users.bikes', ['title' => 'Sell Bikes']);
});
Route::get('/car', function () {
    return view('users.cars', ['title' => 'Sell Cars']);
});
Route::get('/about', function () {
    return view('users.about', ['title' => 'About Us']);
});

// admin
Route::get('/indexs', function () {
    return view('admin.index', ['title' => 'Home Page']);
});


//cars
Route::resource('cars', CarController::class);

// bikes
Route::resource('bikes', BikeController::class);

//people
Route::resource('people', PeopleController::class);

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