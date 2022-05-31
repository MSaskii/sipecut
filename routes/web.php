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

Route::get('/', [\App\Http\Controllers\UmumController::class,'index']);
Route::get('/ajukancuti', [\App\Http\Controllers\UmumController::class,'surat']);
Route::get('/ajukanlegalisir', [\App\Http\Controllers\UmumController::class,'legalisir']);
Route::get('/lacak', [\App\Http\Controllers\UmumController::class,'lacak']);
Route::post('/lacak', [\App\Http\Controllers\UmumController::class,'lacakKan']);

Route::get('/login', [\App\Http\Controllers\PenggunaController::class,'masuk']);
Route::post('/login', [\App\Http\Controllers\PenggunaController::class,'login']);
Route::get('/keluar', [\App\Http\Controllers\PenggunaController::class,'keluar']);

Route::get('/suratmasuk', [\App\Http\Controllers\SuratMasukController::class,'index']);
Route::post('/suratmasuk', [\App\Http\Controllers\SuratMasukController::class,'tambah']);

Route::get('/datacuti', [\App\Http\Controllers\DataCutiController::class,'index']);
Route::post('/datacuti', [\App\Http\Controllers\DataCutiController::class,'simpan']);
Route::post('/datacuti/terima', [\App\Http\Controllers\DataCutiController::class,'terima']);
Route::post('/datacuti/unggah', [\App\Http\Controllers\DataCutiController::class,'unggah']);

Route::get('/kelolacuti', [\App\Http\Controllers\KelolaCutiController::class,'index']);
Route::post('/kelolacuti', [\App\Http\Controllers\KelolaCutiController::class,'simpan']);
Route::post('/suratlegalisir/terima', [\App\Http\Controllers\KelolaCutiController::class,'terima']);

Route::get('/pengguna', [\App\Http\Controllers\PenggunaController::class,'index']);
Route::post('/pengguna', [\App\Http\Controllers\PenggunaController::class,'tambah']);
Route::post('/pengguna/edit', [\App\Http\Controllers\PenggunaController::class,'edit']);
Route::post('/pengguna/hapus', [\App\Http\Controllers\PenggunaController::class,'hapus']);

Route::get('/pdf/{file}', function ($file) {
    // file path
   $path = public_path('surat' . '/' . $file);
    // header
   $header = [
     'Content-Type' => 'application/pdf',
     'Content-Disposition' => 'inline; filename="' . $file . '"'
   ];
  return response()->file($path, $header);
})->name('pdf');
