<?php

use App\Http\Controllers\ChatController;
use Illuminate\Support\Facades\Route;



Route::post('/chat/toClint', [ChatController::class, 'sendToClint']);
Route::post('/chat/verifyMessage', [ChatController::class, 'verifyMesagefromClint']);
Route::post('/chat/toServer', [ChatController::class, 'sendToServer']);
Route::post('/chat/read', [ChatController::class, 'index']);
Route::post('/chat/readAllAdmin', [ChatController::class, 'getAll']);
