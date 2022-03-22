<?php

namespace App\Http\Controllers;

use App\Models\DanhMuc;
use App\Models\SanPham;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        // Tìm sản phẩm theo giá và danh mục
        $from = $request->input('from');
        $to = $request->input('to');
        $id_danhmuc = $request->input('id_danhmuc');

        $query = SanPham::orderByDesc('id');

        if ($from) {
            $query->where('gia', '>=', $from);
        }
        if ($to) {
            $query->where('gia', '<=', $to);
        }
        if ($id_danhmuc) {
            $query->where('id_danhmuc', $id_danhmuc);
        }
        // Sản phẩm mới
        $sanphammoi = $query->get();
        return view('home')->with('sanpham', $sanphammoi);
    }
    public function about()
    {
        return view('about');
    }
    public function chitiet($id = null)
    {
        // Chi tiết sản phẩm theo id
        $data = SanPham::findOrFail($id);

        return view('chitiet')->with('sanpham', $data);
    }
    public function sanpham($id = null)
    {
        // Lấy sản phẩm theo danh mục
        $sanpham = SanPham::where('id_danhmuc', '=', $id)->get();
        // Lấy tên danh mục
        $danhmuc = DanhMuc::findorfail($id);
        return view('product', compact("sanpham",'danhmuc'));
    }
}
