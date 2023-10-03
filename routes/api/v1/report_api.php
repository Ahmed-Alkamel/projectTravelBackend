<?php

use App\Http\Controllers\reportController;
use Illuminate\Support\Facades\Route;

Route::post('/report/cities', [reportController::class, 'reportcities']);
Route::post('/report/custumorRequest', [reportController::class, 'reportCustomurRequest']);
