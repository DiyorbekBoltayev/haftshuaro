<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/sheriyat',[\App\Http\Controllers\Api\MobileController::class,'sheriyat']);
Route::get('/ijodkor/{id}',[\App\Http\Controllers\Api\MobileController::class,'kimdir_ijodi']);
Route::get('/fotogalereya',[\App\Http\Controllers\Api\MobileController::class,'foto_galereya']);
Route::get('/kutubxona',[\App\Http\Controllers\Api\MobileController::class,'kutubxonam']);
Route::get('/durdona_toplamlar',[\App\Http\Controllers\Api\MobileController::class,'durdona_toplamlar']);
Route::get('/eng_sara',[\App\Http\Controllers\Api\MobileController::class,'eng_sara']);
