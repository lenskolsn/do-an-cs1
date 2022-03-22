<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('trangchu'); // trang chu nguoi dung
Route::get('/about', [HomeController::class, 'about'])->name('about'); // trang about

Route::get('/chitiet/{id?}', [HomeController::class, 'chitiet'])->name('xemchitiet'); // trang chi tiet san pham
Route::get('/danhmuc/{id?}', [HomeController::class, 'sanpham'])->name('sp_theo_dm'); // san pham theo danh muc


Route::prefix('admin')->middleware('auth')->group(function () {

    Route::get('/', [AdminController::class, 'index'])->name('dangnhap'); // dang nhap admin
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard'); // trang dashboard

    include 'sanpham.php'; // include san pham (routes)
    include 'danhmuc.php'; // include danh muc (routes)
    include 'banner.php'; // include banner (routes)
    include 'user.php'; // include user (routes)
    include 'khachhang.php'; // include khachhang (routes)
});

Route::get('/dangky', [UserController::class, 'dangky'])->name('dangky'); // trang dang ky user
Route::post('/dangky', [UserController::class, 'luudangky'])->name('luudangky'); // post dang ky user

Route::get('/dangnhap', [UserController::class, 'dangnhap'])->name('dangnhap'); // trang dang nhap user
Route::post('/dangnhap', [UserController::class, 'luudangnhap'])->name('luudangnhap'); // post dang nhap user

Route::get('/dangxuat', [UserController::class, 'dangxuat'])->name('dangxuat'); // trang dang xuat
