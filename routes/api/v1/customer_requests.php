<?php

use App\Http\Controllers\CustomerRequestsController;
use Illuminate\Support\Facades\Route;

Route::post('/CustomerRequest/read', [CustomerRequestsController::class, 'getRequestByCustomer']);
Route::post('/CustomerRequest/all', [CustomerRequestsController::class, 'index'])->name('customerRequest.Admin.index');
Route::post('/CustomerRequest/updataState', [CustomerRequestsController::class, 'updateStatRequest']);
Route::post('/CustomerRequest/EditeDStatDataInput', [CustomerRequestsController::class, 'updateStatRequrment'])->name('customerRequest.Admin.updataStateRequement');
