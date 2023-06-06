<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/



Route::post('/auth/register', [\SJoussin\Http\Controllers\AuthController::class, 'createUser']);
Route::post('/auth/login', [\SJoussin\Http\Controllers\AuthController::class, 'loginUser']);
Route::post('/auth/login/phone', [\SJoussin\Http\Controllers\AuthController::class, 'loginUserByPhone']);
Route::post('/auth/token', [\SJoussin\Http\Controllers\AuthController::class, 'tokenUser']);



Route::middleware(['auth:sanctum'])->group(function () {

    Route::get('/auth/user', [\SJoussin\Http\Controllers\AuthController::class, 'loggedUser']);

    Route::get('/users',  [\SJoussin\Http\Controllers\AuthController::class, 'getAll']);
    Route::get('/user/{user}',  [\SJoussin\Http\Controllers\AuthController::class, 'get']);
    Route::put('/user/{user}',  [\SJoussin\Http\Controllers\AuthController::class, 'update']);
    Route::delete('/user/{user}', [\SJoussin\Http\Controllers\AuthController::class, 'destroy']);
});

