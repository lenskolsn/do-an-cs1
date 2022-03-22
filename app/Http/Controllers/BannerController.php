<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\SanPham;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BannerController extends Controller
{
    function index()
    {
        $result = Banner::orderByDesc('id')->paginate(4);
        return view('banner.index')->with('banner', $result);
    }
    function them()
    {
        return view('banner.them');
    }
    function luu(Request $request, $id = null)
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

        $bn = Banner::updateOrCreate(['id' => $id], $data);
        $bn->save();

        return redirect()->route('danhsachbanner');
    }
    function sua($id = null)
    {
        $data = Banner::findOrFail($id);
        return view('banner.sua')->with('banner', $data);
    }
    function xoa($id = null)
    {
        Banner::destroy($id);
        return back()->with('success','Xóa thành công');
    }
    public function customValidator($dt){
        $rules = [
            'ten' => 'required',
            'hinhanh' => 'image',
            'mota' => 'required'    
        ];
        $fields = [
            'ten'=>'Tên banner',
            'hinhanh' => 'File',
            'mota'=>'Mô tả'
        ];
        $validator = Validator::make($dt, $rules, [], $fields);
        $validator->validate();
    }
}
