<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProvinsiController;
use App\Http\Controllers\KabupatenController;
use App\Http\Controllers\PendudukController;

// Route::get('/', function () {
//     return view('welcome');
// })->name('home');
////

Route::get('/' ,[PendudukController::class, 'home'])->name('home');

Route::get('/penduduk', [PendudukController::class, 'index'])->name('penduduk');
Route::post('/penduduk', [PendudukController::class, 'store'])->name('penduduk.store');
Route::get('/penduduk/{penduduk}', [PendudukController::class, 'show'])->name('penduduk.show');
Route::get('/penduduk/{penduduk}/edit', [PendudukController::class, 'edit'])->name('penduduk.edit');
Route::put('/penduduk/{penduduk}', [PendudukController::class, 'update'])->name('penduduk.update');
Route::delete('/penduduk/{penduduk}', [PendudukController::class, 'destroy'])->name('penduduk.destroy');

////
Route::get('/provinsi', [ProvinsiController::class, 'index'])->name('provinsi');
Route::post('/provinsi/store', [ProvinsiController::class, 'store']);
Route::get('/provinsi/{id}/edit', [ProvinsiController::class, 'edit']);
Route::put('/provinsi/{id}', [ProvinsiController::class, 'update']);
Route::delete('/provinsi/{id}', [ProvinsiController::class, 'destroy']);


////

Route::get('/kabupaten', [KabupatenController::class, 'index'])->name('kabupaten');
Route::post('/kabupaten/store', [KabupatenController::class, 'store']);
Route::get('/kabupaten/{id}/edit', [KabupatenController::class, 'edit']);
Route::put('/kabupaten/{id}', [KabupatenController::class, 'update']);
Route::delete('/kabupaten/{id}', [KabupatenController::class, 'destroy']);
