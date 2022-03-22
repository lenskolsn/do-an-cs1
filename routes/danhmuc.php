<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DanhMucController;

Route::prefix('danhmuc')->group(function () {
    Route::get('/', [DanhMucController::class, 'index'])->name('danhmuc');
    Route::get('/them/{id?}', [DanhMucController::class, 'them'])->name('themdm');
    Route::post('/luu/{id?}', [DanhMucController::class, 'luu'])->name('luudm');
    Route::get('/sua/{id?}', [DanhMucController::class, 'sua'])->name('suadm');
    Route::get('/xoa/{id?}', [DanhMucController::class, 'xoa'])->name('xoadm');
    Route::get('/chitiet/{id?}', [DanhMucController::class, 'chitiet'])->name('chitietdm');
});
