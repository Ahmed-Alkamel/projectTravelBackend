<?php

use App\Http\Controllers\CompaniesController;
use Illuminate\Support\Facades\Route;



Route::get('/Company', [CompaniesController::class, 'index'])->name('Company.index');
Route::get('/company/trip', [CompaniesController::class, 'indexTrip']);
// Route::get('/company/trip')
Route::post('/Company/add', [CompaniesController::class, 'store']);

Route::patch('/getCompanyByid', [CompaniesController::class, 'readCompanyByid']);

Route::delete('', []);
