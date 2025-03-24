<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Dashboard\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [LoginController::class, 'index']);

Route::post('/login', [LoginController::class, 'login']);


Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth')->name('dashboard');
