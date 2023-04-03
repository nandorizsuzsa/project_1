<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\API\RegisterController;
use App\Http\Controllers\API\SelectController;
use App\Http\Controllers\API\InsertController;
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

Route::controller(RegisterController::class)->group(function(){
    // új user felvitele
    Route::post('register', 'register');
    
    // meglevő user token kérés
    Route::post('token_for_user', 'token_for_user');
    
});

Route::controller(SelectController::class)->group(function(){
    //lekérdezés
    Route::post('select', 'select');
    
});


Route::controller(InsertController::class)->group(function(){
    //lekérdezés
    Route::post('insert', 'insert');
    
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
