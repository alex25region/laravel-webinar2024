<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;

Route::get('/', DashboardController::class)->name('dashboard');

Route::resource('users', UserController::class);

