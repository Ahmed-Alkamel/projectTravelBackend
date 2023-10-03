<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::post('/test', [Controller::class, 'test']);
