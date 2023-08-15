<?php

use App\Http\Controllers\KepalaPublikasiController;
use App\Http\Controllers\OperatorController;
use App\Http\Controllers\StaffHukumController;
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

// guest sebelum melakukan login kedalam sistem
Route::group(['middleware' => 'guest'], function () {
    Route::get('/', [UserController::class, 'login'])->name('login');
    Route::post('/', [UserController::class, 'dologin']);
});
// guest yang akan melakukan logout
Route::group(['middleware' => ['auth', 'checkrole:1,2']], function () {
    Route::post('/logout', [UserController::class, 'logout']);
    Route::get('/redirect', [UserController::class, 'cek']);
});

// login untuk operator
Route::group(['middleware' => ['auth', 'checkrole:1']], function () {
    Route::get('/operator', [OperatorController::class, 'index']);
});

// login untuk kepalapublikasi
Route::group(['middleware' => ['auth', 'checkrole:2']], function () {
    Route::get('/kepalapublikasi', [KepalaPublikasiController::class, 'index']);
});

// login untuk staffdokumentasi
Route::group(['middleware' => ['auth', 'checkrole:1']], function () {
    Route::get('/staffdokumentasi', [StaffHukumController::class, 'index']);
});
