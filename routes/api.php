<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\CustomerController;
use App\Http\Controllers\Api\OrderController;
use App\Http\Controllers\Api\OrderDetailController;
use App\Http\Controllers\Api\VehicleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Public routes - Tidak perlu token
Route::post('/login', [AuthController::class, 'login'])->name('api.login');

Route::prefix('customers')->group(function () {
    Route::post('/register', [CustomerController::class, 'register']);
    Route::post('/login', [CustomerController::class, 'login']);
});

// Protected routes (Perlu token)
Route::middleware('auth:sanctum')->group(function () {
    // Admin/Staff user info
    Route::get('/user', function (Request $request) {
        return response()->json($request->user());
    });

    // Customer Protected routes
    Route::prefix('customers')->group(function () {
        Route::post('/logout', [CustomerController::class, 'logout']);
        Route::get('/profile', [CustomerController::class, 'profile']);

        // CRUD operations untuk customer (manual routes untuk avoid conflict)
        Route::get('/', [CustomerController::class, 'index']);
        Route::get('/{id}', [CustomerController::class, 'show']);
        Route::put('/{id}', [CustomerController::class, 'update']);
        Route::delete('/{id}', [CustomerController::class, 'destroy']);
    });

    // Vehicle routes
    Route::apiResource('vehicles', VehicleController::class);

    // Order routes
    Route::apiResource('orders', OrderController::class);
    Route::apiResource('order-details', OrderDetailController::class);
});


