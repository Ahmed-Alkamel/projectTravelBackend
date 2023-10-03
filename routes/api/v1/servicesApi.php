<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServicesController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::post('/ShowServices', [ServicesController::class, 'index'])->name('Services.showAll');
Route::Post('/ServiceById', [ServicesController::class, 'getById']);
Route::Post('/ServiceByCategryid', [ServicesController::class, 'getServicesByCategory']);
Route::post('/Services/add', [ServicesController::class, 'store']);
