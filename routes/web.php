<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes([
    'register'=>false
]);


//front routes
Route::name('front.')->group(function () {
    Route::get('/',[\App\Http\Controllers\UserController::class,'bosh_sahifa'])->name('bosh_sahifa');

});


//admin routes
Route::prefix('admin')->name('admin.')->middleware(['web', 'auth'])->group(function () {
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('users',\App\Http\Controllers\AdminController::class);


});
