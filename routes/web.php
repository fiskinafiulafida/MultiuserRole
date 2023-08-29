<?php

use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\DashboardPemohonController;
use App\Http\Controllers\JdihController;
use App\Http\Controllers\KepalaPublikasiController;
use App\Http\Controllers\KepPubkikasiBeritaController;
use App\Http\Controllers\LoginPemohonController;
use App\Http\Controllers\OperatorController;
use App\Http\Controllers\StaffHukumController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginWithGoogleController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterPemohonController;

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
Route::group(['middleware' => ['auth', 'checkrole:1,2,3,4,5,6,7,8,9,10']], function () {
    Route::post('/logout', [UserController::class, 'logout']);
    Route::get('/logout', [UserController::class, 'logout']);
    Route::get('/redirect', [UserController::class, 'cek']);
});
// Operator //
// login untuk operator
Route::group(['middleware' => ['auth', 'checkrole:1']], function () {
    Route::get('/operator', [OperatorController::class, 'index']);
});
// berita
Route::resource('/berita', BeritaController::class)->middleware('checkrole:1');

// login untuk kepalapublikasi
Route::group(['middleware' => ['auth', 'checkrole:9']], function () {
    Route::get('/kepalapublikasi', [KepalaPublikasiController::class, 'index']);
});
Route::resource('/kepalapublikasiberita', KepPubkikasiBeritaController::class)->middleware('checkrole:9');

// login untuk staffhukum
Route::group(['middleware' => ['auth', 'checkrole:10']], function () {
    Route::get('/staffhukum', [StaffHukumController::class, 'index']);
});
// artikel
Route::resource('/artikel', ArtikelController::class)->middleware('checkrole:10');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home/berita', [App\Http\Controllers\HomeController::class, 'berita'])->name('berita');


Route::get('authorized/google', [LoginWithGoogleController::class, 'redirectToGoogle']);
Route::get('authorized/google/callback', [LoginWithGoogleController::class, 'handleGoogleCallback']);


// profile
Route::resource('/profile', ProfileController::class)->middleware('auth');
// password
Route::resource('/password', PasswordController::class)->middleware('auth');
Route::post('/change-password', [App\Http\Controllers\PasswordController::class, 'update'])->name('update-password')->middleware('auth');

// Login dan Register Pemohon 
Route::group(['middleware' => 'guest'], function () {
    Route::get('/LoginPemohon', [LoginPemohonController::class, 'index']);
    Route::post('/LoginPemohon', [LoginPemohonController::class, 'prosesLogin']);
});

Route::resource('/RegisterPemohon', RegisterPemohonController::class)->middleware('guest');

// Halaman utama JDIH
Route::resource('/HomeHukum', JdihController::class);

Route::resource('/DashboardPemohon', DashboardPemohonController::class)->middleware('auth');
