<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\CustomerController;
use App\Http\Controllers\Api\OrderController;
use App\Http\Controllers\Api\OrderDetailController;
use App\Http\Controllers\Api\VehicleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Auth routes (Admin/Staff)
Route::post('/login', [AuthController::class, 'login']);
Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
    // CRUD Customer (hanya untuk admin/staff yang sudah login)
    Route::apiResource('customers', CustomerController::class);
});

// Customer Auth routes (Public - Tidak perlu token)
Route::prefix('customers')->group(function () {
    Route::post('/register', [CustomerController::class, 'register']);
    Route::post('/login', [CustomerController::class, 'login']);
});

// Customer Protected routes (Perlu token)
Route::middleware('auth:sanctum')->group(function () {
    Route::prefix('customers')->group(function () {
        Route::post('/logout', [CustomerController::class, 'logout']);
        Route::get('/profile', [CustomerController::class, 'profile']);
    });

    // Vehicle routes
    Route::apiResource('vehicles', VehicleController::class);

    // Order routes
    Route::apiResource('orders', OrderController::class);
    Route::apiResource('order-details', OrderDetailController::class);
});


