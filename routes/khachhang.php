<?php

use App\Http\Controllers\KhachHangController;
use Illuminate\Support\Facades\Route;

Route::prefix('khachhang')->group(function(){
  Route::get('/',[KhachHangController::class,'index'])->name('danhsachkhachhang');
});