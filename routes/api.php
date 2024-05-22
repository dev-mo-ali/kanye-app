<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Kanye\QuotesController;
use App\Http\Controllers\API\AuthController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
// login
Route::post('/login', [AuthController::class, 'login']);
Route::get('/quotes/{count}', [QuotesController::class, 'index'])->middleware('auth:sanctum');

