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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');
Route::get('/load-latest-messages', [App\Http\Controllers\MessagesController::class,'getLoadLatestMessages']);
Route::post('/send', [App\Http\Controllers\MessagesController::class,'postSendMessage']);
Route::get('/fetch-old-messages', [App\Http\Controllers\MessagesController::class,'getOldMessages']);