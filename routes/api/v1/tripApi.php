<?php

use App\Http\Controllers\TripsController;
use Illuminate\Support\Facades\Route;

Route::get('/trips', [TripsController::class, 'index'])->name('trips.index');
Route::post('/trips/add', [TripsController::class, 'add']);
