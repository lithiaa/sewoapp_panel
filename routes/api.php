<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\CustomerController;
use App\Http\Controllers\Api\OrderController;
use App\Http\Controllers\Api\OrderDetailController;
use App\Http\Controllers\Api\VehicleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::post('/login', [AuthController::class, 'login']);

Route::apiResource('/customers', CustomerController::class);
Route::post('/customers/login', [CustomerController::class, 'login']);
Route::post('/customers/logout', [CustomerController::class, 'logout']);
Route::apiResource('/vehicles', VehicleController::class);
Route::apiResource('/orders', OrderController::class);
Route::apiResource('/order-details', OrderDetailController::class);


