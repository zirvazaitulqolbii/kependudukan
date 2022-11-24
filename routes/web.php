<?php

use App\Http\Controllers\AgamaController;
use App\Http\Controllers\KartuKeluargaController;
use App\Http\Controllers\KartuKeluargaFrontController;
use App\Http\Controllers\KelahiranController;
use App\Http\Controllers\KelahiranFrontController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\KelurahanController;
use App\Http\Controllers\KelurahanFrontController;
use App\Http\Controllers\KematianController;
use App\Http\Controllers\PendudukController;
use App\Http\Controllers\PendudukFrontController;
use App\Http\Controllers\KematianFrontController;
use App\Http\Controllers\StatusKawinController;

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
Route::get('/home', function () {
    return view('home');
});

Route::get('/', function () {
    return view('/login');
})->middleware('guest');
    
Route::get('/dashboard', function () {
    return view('dashboard.index');
});

//Dashboard
Route::resource('kelurahan',KelurahanController::class)->middleware('auth');
Route::resource('penduduk',PendudukController::class)->middleware('auth');
Route::resource('kelahiran',KelahiranController::class)->middleware('auth');
Route::resource('kematian',KematianController::class)->middleware('auth');
Route::resource('agama',AgamaController::class)->middleware('auth');
Route::resource('kk',KartuKeluargaController::class)->middleware('auth');
Route::resource('status',StatusKawinController::class)->middleware('auth');

//FrontEnd
Route::resource('penduduk-front',PendudukFrontController::class);
Route::resource('kematian-front',KematianFrontController::class);
Route::resource('kelahiran-front',KelahiranFrontController::class);
Route::resource('kartukeluarga-front',KartuKeluargaFrontController::class);
Route::resource('kelurahan-front',KelurahanFrontController::class);

Route::post('/login',[LoginController::class,'authenticate']);
Route::get('/login',[LoginController::class,'login'])->name('login')->middleware('guest');
Route::post('/logout',[LoginController::class,'logout']);

