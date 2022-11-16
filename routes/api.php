<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\API\RegisterController;


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


//Public Route
Route::post('register', [RegisterController::class, 'register']);
Route::post('login', [RegisterController::class, 'login']);

//Our protected routes
Route::middleware('auth:api')->group(function () {

    Route::get('user', function (Request $request) {
        
        return $request->user();
    });
    
    Route::post('logout', [RegisterController::class, 'logout']);
});