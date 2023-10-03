<?php

use App\Http\Controllers\IdentityCustomersController;
use Illuminate\Support\Facades\Route;



Route::post('/Identity/read', [IdentityCustomersController::class, 'index']);
// ->name('Company.index');
