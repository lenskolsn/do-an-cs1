<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SanPhamController;

Route::prefix('sanpham')->group(function () {
    Route::get('/', [SanPhamController::class, 'index'])->name('danhsachsp');
    Route::get('/them/{id?}', [SanPhamController::class, 'them'])->name('themsp');
    Route::post('/luu/{id?}', [SanPhamController::class, 'luu'])->name('luusp');
    Route::get('/sua/{id?}', [SanPhamController::class, 'sua'])->name('suasp');
    Route::get('/xoa/{id?}', [SanPhamController::class, 'xoa'])->name('xoasp');
    Route::get('/chitiet/{id?}', [SanPhamController::class, 'chitiet'])->name('chitietsp');
});
