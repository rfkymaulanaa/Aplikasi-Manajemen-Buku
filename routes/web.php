<?php

use App\Http\Controllers\BukusController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PenerbitController;


Route::resource('kategori', KategoriController::class);
Route::resource('penerbit', PenerbitController::class);
Route::resource('buku', BukusController::class);

Route::get('/', [BukusController::class, 'index']);
