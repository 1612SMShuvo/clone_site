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
Route::get('refresh_captcha', [App\Http\Controllers\HomeController::class, 'refreshCaptcha'])->name('refresh_captcha');
Route::get('/', function () {
    return view('welcome');
});

Route::get('/track-application',[App\Http\Controllers\HomeController::class, 'track_form']);

Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/search-record', [App\Http\Controllers\RecordController::class, 'search_show'])->name('search-record');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/add-record', [App\Http\Controllers\HomeController::class, 'create'])->name('add-record');
    Route::post('/store-record', [App\Http\Controllers\RecordController::class, 'store'])->name('store-record');
    Route::get('/edit-record/{id}', [App\Http\Controllers\RecordController::class, 'edit'])->name('edit-record');
    Route::post('/edit-record/{id}', [App\Http\Controllers\RecordController::class, 'update'])->name('update-record');
    Route::get('/remove-record/{id}', [App\Http\Controllers\RecordController::class, 'destroy'])->name('remove-record');
});

