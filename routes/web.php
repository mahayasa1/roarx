<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BikeController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\PeopleController;
use App\Http\Controllers\DashboardController;


Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

// users

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
// Route::get('/indexs', [DashboardController::class, 'indexs']);



//cars
Route::resource('cars', CarController::class);

// bikes
Route::resource('bikes', BikeController::class);

//people
Route::resource('people', PeopleController::class)->parameters([
    'people' => 'peoples']);

// auth
Route::middleware('auth')->group(function () {
    Route::get('/profile', function () {
        return view('users.profile', ['title' => 'User Profile']);
    });
});

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/indexs',[DashboardController::class, 'indexs'])->name('admin.index');
});

Route::middleware(['auth', 'role:user'])->group(function () {
    Route::get('/index', function () {
        return view('users.index', ['title' => 'User Dashboard']);
    });
});

