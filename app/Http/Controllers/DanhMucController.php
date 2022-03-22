<?php

namespace App\Http\Controllers;

use App\Models\DanhMuc;
use App\Models\SanPham;
use Illuminate\Http\Request;
use Symfony\Component\VarDumper\Caster\RedisCaster;

class DanhMucController extends Controller
{
    function index()
    {
        $result = DanhMuc::orderByDesc('id')->paginate(5);
        return view('danhmuc.index')->with('danhmuc', $result);
    }
    function luu(Request $request, $id = null)
    {
        $data = $request->all();
        unset($data['_token']);

        $dm = DanhMuc::updateOrCreate(['id' => $id], $data);
        $dm->save();

        return redirect()->route('danhmuc');
    }
    function sua($id = null)
    {
        $data = DanhMuc::findOrFail($id);
        return view('danhmuc.sua')->with('danhmuc', $data);
    }
    function xoa($id = null)
    {
        DanhMuc::destroy($id);
        return back();
        // if($danhmuc->san_phams->count() > 0){
        //     return back()->with('success', 'Xóa thành công!!!');
        // } else {
        //     return back()->with('error', 'Xóa không thành công!!!');
        // }
    }
}
