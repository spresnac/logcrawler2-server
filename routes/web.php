<?php

use App\Http\Controllers\ProjectsController;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/not_active', function () {
    return view('not_active');
})->name('not_active');

Route::middleware(['auth:sanctum', 'verified', 'is_active'])->group(function() {

    Route::get(RouteServiceProvider::HOME, [ProjectsController::class, 'index'])->name('dashboard');
    Route::get('/projects/create', [ProjectsController::class, 'create'])->name('projects.create');
    Route::post('/projects/create', [ProjectsController::class, 'store'])->name('projects.store');
    Route::get('/projects/{project}', [ProjectsController::class, 'edit'])->name('projects.edit');

});
