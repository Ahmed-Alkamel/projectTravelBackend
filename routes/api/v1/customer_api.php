<?php

use App\Http\Controllers\CustomersController;
use Illuminate\Support\Facades\Route;

Route::post('/customer/sigin', [CustomersController::class, 'add']);
Route::post('/customer/test', [CustomersController::class, 'test']);
Route::post('/customer/login', [CustomersController::class, 'login']);
Route::post('/customer/read', [CustomersController::class, 'index']);
Route::post('/customer/refresh', [CustomersController::class, 'refresh']);
