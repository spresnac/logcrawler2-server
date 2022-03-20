<?php

use App\Http\Controllers\ApiController;
use Illuminate\Support\Facades\Route;

Route::prefix('/v2')
    ->middleware(['auth:sanctum'])
    ->group(function() {
        Route::post('/log', [ApiController::class, 'log'])->name('api.log');
        Route::post('/info', [ApiController::class, 'get_info'])->name('api.get_info');
});
