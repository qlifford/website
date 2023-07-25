<?php

use App\Http\Controllers\AboutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\UserController;

Route::get('/register', [UserController::class, 'register'])->name('register');
    Route::post('/register', [UserController::class, 'reg_user']);

Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/login', [UserController::class, 'log_user']);

Route::post('/logout', [UserController::class, 'logout'])->name('logout');

Route::get('/', [HomeController::class, 'index']);
Route::get('/service', [ServiceController::class, 'service'])->name('service');
Route::get('/about', [AboutController::class, 'about'])->name('about');
