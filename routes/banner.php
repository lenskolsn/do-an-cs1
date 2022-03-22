<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BannerController;

Route::prefix('banner')->group(function () {
    Route::get('/', [BannerController::class, 'index'])->name('danhsachbanner');
    Route::get('/them/{id?}', [BannerController::class, 'them'])->name('thembanner');
    Route::post('/luu/{id?}', [BannerController::class, 'luu'])->name('luubanner');
    Route::get('/sua/{id?}', [BannerController::class, 'sua'])->name('suabanner');
    Route::get('/xoa/{id?}', [BannerController::class, 'xoa'])->name('xoabanner');
    Route::get('/chitiet/{id?}', [BannerController::class, 'chitiet'])->name('chitietbanner');
});
