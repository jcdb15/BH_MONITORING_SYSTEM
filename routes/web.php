<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminLoginController;

Route::get('/', function () {
    return redirect()->route('admin.login');
});

Route::get('/admin/login', [AdminLoginController::class, 'showLogin'])
    ->name('admin.login');

Route::post('/admin/login', [AdminLoginController::class, 'login'])
    ->name('admin.login.submit');

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->middleware('auth')->name('admin.dashboard');

Route::post('/admin/logout', [AdminLoginController::class, 'logout'])
    ->name('admin.logout');


Route::get('/dashboard', function () {
    return view('dashboard');
});

