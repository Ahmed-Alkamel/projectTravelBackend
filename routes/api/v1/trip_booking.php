<?php

use App\Http\Controllers\TripsBookingsController;
use Illuminate\Support\Facades\Route;

Route::post('/BookingTrip/add', [TripsBookingsController::class, 'store']);
