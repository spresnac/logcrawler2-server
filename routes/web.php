<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/not_active', function () {
    return view('not_active');
})->name('not_active');

Route::middleware(['auth:sanctum', 'verified', 'is_active'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
