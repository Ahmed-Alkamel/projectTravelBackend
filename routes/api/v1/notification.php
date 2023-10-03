<?php

use App\Http\Controllers\NotificationDetailsController;
use Illuminate\Support\Facades\Route;



Route::post('/notification/recive', [NotificationDetailsController::class, 'receveNotification']);
