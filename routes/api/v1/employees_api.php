<?php

use App\Http\Controllers\EmployeesController;
use Illuminate\Support\Facades\Route;



Route::post('/employees/login', [EmployeesController::class, 'login']);
Route::post('/employees/add', [EmployeesController::class, 'store']);
Route::post('/employees/read', [EmployeesController::class, 'index'])->name('emp.index');
