<?php

use App\Http\Controllers\ServicesBookinngController;
use Illuminate\Support\Facades\Route;



Route::post('/ServicesBooking/Add', [ServicesBookinngController::class, 'store']);
// ->name('Company.index');
