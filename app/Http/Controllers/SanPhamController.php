<?php

namespace App\Http\Controllers;

use App\Models\SanPham;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SanPhamController extends Controller
{
    public function index()
    {
        $result = SanPham::orderbydesc('id')->search()->paginate(4);
        
        return view('sanpham.index')->with('sanpham', $result);
    }
    public function them()
    {
        return view('sanpham.them');
    }
    public function luu(Request $request, $id = null)
    {
        $data = $request->all();
        unset($data['_token']);

        $this->customValidator($data);

        $file = $request->file('hinhanh');
        if ($file != null) {
            $filename = $file->hashName();
            $file->storeAs('/public', $filename);
            $data['hinhanh'] = $filename;
        }

        $sp = SanPham::updateOrCreate(['id' => $id], $data);
        $sp->save();

        return redirect()->route('danhsachsp');
    }
    public function sua($id = null)
    {
        $data = SanPham::findOrFail($id);
        return view('sanpham.sua')->with('sanpham', $data);
    }
    public function xoa($id = null)
    {
        SanPham::destroy($id);
        return back()->with('success','Xóa thành công');
    }
    public function chitiet($id = null)
    {
        $data = SanPham::findOrFail($id);
        return view('sanpham.chitiet')->with('sanpham', $data);
    }
    public function customValidator($data)
    {

        $rules = [
            'tensanpham' => 'required| max:50',
            'hinhanh' => 'image',
            'gia' => 'required| numeric |max:99999999|min:1',
            'id_danhmuc' => 'required',
            'mota' => 'required|max:255',
        ];
        
        $fields = [
            'tensanpham' => 'Tên sản phẩm',
            'hinhanh' => 'File',
            'gia' => 'Giá',
            'id_danhmuc' => 'Danh mục',
            'mota' => 'Mô tả',
        ];
        $validator = Validator::make($data, $rules, [], $fields);
        $validator->validate();
    }
}
