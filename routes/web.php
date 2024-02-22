<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\BarangController;

//route resource
Route::resource('/posts', \App\Http\Controllers\PostController::class);
Route::resource('/kategoris', \App\Http\Controllers\KategoriController::class);
Route::resource('/barangs', \App\Http\Controllers\BarangController::class);