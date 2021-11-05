<?php

use App\Http\Controllers\ApiController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum'])
    ->post('/log', [ApiController::class, 'log'])
    ->name('api.log');
