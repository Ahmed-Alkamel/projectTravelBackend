<?php

use App\Http\Controllers\CategoriesServicesDetailsController;
use Illuminate\Support\Facades\Route;



Route::get('/categorySub',[CategoriesServicesDetailsController::class,'index'])->name('categorySub.index');

Route::patch('',[]);

Route::delete('',[]);