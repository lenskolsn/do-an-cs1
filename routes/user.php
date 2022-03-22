<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

  Route::get('/danhsach',[UserController::class, 'index'])->name('danhsachnhanvien');
  Route::get('/them',[UserController::class, 'them'])->name('themnhanvien')->middleware('auth','admin');
  Route::get('/sua/{id?}',[UserController::class, 'sua'])->name('suanhanvien');
  Route::get('/xoa/{id?}',[UserController::class, 'xoa'])->name('xoanhanvien');
