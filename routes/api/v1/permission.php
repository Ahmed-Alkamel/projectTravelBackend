<?php

use App\Http\Controllers\PermissonEmployeeController;
use Illuminate\Support\Facades\Route;

Route::post('/permission/index', [PermissonEmployeeController::class, 'index']);
// Route::post('/permission/custumorRequest', [reportController::class, 'reportCustomurRequest']);
