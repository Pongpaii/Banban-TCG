<?php

use App\Http\Controllers\Api\CardController;
use App\Http\Controllers\Api\AdminController;
use Illuminate\Support\Facades\Route;

// <CHANGE> Removed duplicate /cards route, keeping only controller-based routes
Route::get('/cards', [CardController::class, 'index']);
Route::get('/cards/{slug}', [CardController::class, 'show']);
Route::post('/cards/search', [CardController::class, 'search']);

// Admin routes
Route::prefix('admin')->group(function () {
    Route::post('/cards', [AdminController::class, 'addCard']);
    Route::put('/cards/{id}/prices', [AdminController::class, 'updatePrices']);
});

Route::get('/test', function () {
    return response()->json([
        'success' => true,
        'message' => 'API is working!',
        'timestamp' => now()
    ]);
});