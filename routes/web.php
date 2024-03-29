<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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

//set language
Route::get('locale/{lang}',[\App\Http\Controllers\LocalizationController::class,'setLang'])->name('setLang');

//front routes
Route::name('front.')->group(function () {

    //v2
    Route::get('/tadqiqiot', [UserController::class, 'tadqiqot'])->name('tadqiqot');
    Route::get('/ijodkorlar', [UserController::class, 'ijodkorlar'])->name('ijodkorlar');
    Route::get('/contact', [UserController::class, 'contact'])->name('contact');


    //
    Route::get('/',[UserController::class,'bosh_sahifa'])->name('bosh_sahifa');
    Route::get('/muallif_haqida',[UserController::class,'muallif_haqida'])->name('muallif_haqida');
    Route::get('/fotogalereya',[UserController::class,'fotogalereya'])->name('fotogalereya');
    Route::get('/adabiy_muhit',[UserController::class,'adabiy_muhit'])->name('adabiy_muhit');
    Route::get('/badiiy_ijod',[UserController::class,'adabiy_ijod'])->name('badiiy_ijod');
    Route::get('/biografik',[UserController::class,'biografik'])->name('biografik');
    Route::get('/nusxalari',[UserController::class,'nusxalari'])->name('nusxalari');
    Route::get('/gazallar',[UserController::class,'gazallar'])->name('gazallar');
    Route::get('/gazallar_tasnifi',[UserController::class,'gazallar_tasnifi'])->name('gazallar_tasnifi');
    Route::get('/sheriy_sanat',[UserController::class,'sheriy_sanat'])->name('sheriy_sanat');
    Route::get('/sheriy_janrlar',[UserController::class,'sheriy_janrlar'])->name('sheriy_janrlar');
    Route::get('/musammat',[UserController::class,'musammat'])->name('musammat');
    Route::get('/boshqa_janrlar',[UserController::class,'boshqa_janrlar'])->name('boshqa_janrlar');
    Route::get('/sheriyat',[UserController::class,'sheriyat'])->name('sheriyat');
    Route::get('/{kimdir}_ijodi',[UserController::class,'kimdir_ijodi'])->name('kimdir_ijodi');

    Route::get('/kutubxonam',[UserController::class,'kutubxonam'])->name('kutubxonam');
    Route::get('/durdona_toplamlar',[UserController::class,'durdona_toplamlar'])->name('durdona_toplamlar');
    Route::get('/eng_sara',[UserController::class,'eng_sara'])->name('eng_sara');
    Route::get('/download/{id}',[UserController::class,'getDownload'])->name('yukla');

});

Route::get('/ijodkor/{id}',[UserController::class,'kimdir_ijodkor'])->name('kimdir_ijodkor');

//admin routes
Route::prefix('admin')->name('admin.')->middleware(['web', 'auth'])->group(function () {
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('users',\App\Http\Controllers\AdminController::class);
    Route::resource('photos',\App\Http\Controllers\FotoController::class);
    Route::resource('sher',\App\Http\Controllers\SherController::class);
    Route::resource('shoir',\App\Http\Controllers\ShoirController::class);
    Route::resource('kitob',\App\Http\Controllers\KitobController::class);

});
Route::prefix('admin')->name('admin.')->group(function () {

    Route::resource('massage',\App\Http\Controllers\MassageController::class);

});
