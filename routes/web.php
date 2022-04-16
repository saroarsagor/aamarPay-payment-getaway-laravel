<?php

//All Controller Path...
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Welcomecontroller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NumberVerifyController;

//Users & Roles Route Controller Path...
use App\Http\Controllers\userRoles\RoleController;
use App\Http\Controllers\userRoles\UserController;




// All routes list here....
Auth::routes();
Route::get('/', [Welcomecontroller::class, 'index'])->name('welcome');

Route::get('/payment', [Welcomecontroller::class, 'payment']);
Route::post('/success', [Welcomecontroller::class, 'success'])->name('success');
Route::post('/fail', [Welcomecontroller::class, 'fail'])->name('fail');



Route::get('/dashboard', [HomeController::class, 'index'])->name('home');

//Role Permission Routes Here....
Route::middleware('auth')->prefix('dashboard')->group(function () {

    //Users & Roles Controller...
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
});

    