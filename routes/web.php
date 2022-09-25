<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\RakController;



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

Route::get('/beranda', [BukuController::class, 'home']);
Route::get('/buku', [BukuController::class, 'index']);
Route::get('/create', [BukuController::class, 'create']);
Route::post('/create/post', [BukuController::class, 'post']);
Route::get('/edit/{id}', [BukuController::class, 'edit']);
Route::put('/update/{id}', [BukuController::class, 'update']);
Route::get('/delete/{id}', [BukuController::class, 'delete']);

Route::get('/login', [AuthController::class, 'login']);
Route::post('/proses_login', [AuthController::class, 'prosesLogin']);

Route::get('/anggota', [AnggotaController::class, 'index']);
Route::get('/rak', [RakController::class, 'index']);



