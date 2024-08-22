<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

// route login
Route::get('login', [\App\Http\Controllers\LoginController::class, 'index']);
Route::post('action-login',  [\App\Http\Controllers\LoginController::class, 'actionLogin'])->name('action-login');

// route dashboard
Route::get('dashboard', [\App\Http\Controllers\DashboardController::class, 'index']);