<?php

use App\Http\Controllers\CategoriesServicesController;
use Illuminate\Support\Facades\Route;



Route::get('/category',[CategoriesServicesController::class,'index'])->name('category.index');

Route::post('/getCategory',[CategoriesServicesController::class,'readCategoryByid']);

Route::delete('',[]);