<?php

namespace App\Http\Controllers;

use App\Models\KhachHang;
use Illuminate\Http\Request;

class KhachHangController extends Controller
{
    public function index()
    {
        $khachhang = KhachHang::all();
        return view('khachhang.index', compact('khachhang'));
    }
}
