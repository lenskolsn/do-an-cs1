<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    function index(){
        $result = User::all();
        return view('user.index')->with('user', $result);
    }
    function them(){
        return view('user.them');
    }
    // function sua($id=null){
    //     $data = User::findOrFail($id);
    //     return view('user.sua')->with('taikhoan',$data);
    // }
    function xoa($id = null){
        User::destroy($id);
        return back();
    }
    function dangnhap()
    {
        return view('admin.login');
    }

    function luudangnhap(Request $request)
    {
        $userLogin = Validator::make(
            $request->all(),
            ['email' => 'required', 'password' => 'required'],
            [],
            ['email' => 'Email', 'password' => 'Mật khẩu']
        );

        $userLogin->validate();

        $userLogin = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (Auth::attempt($userLogin)) {
            $request->session()->regenerate();
            return redirect()->route('dashboard');
        } else {
            return redirect()->route('dangnhap');
        }
    }

    function dangky()
    {
        return view('admin.them');
    }

    function luudangky(Request $request)
    {

        $data = $request->all();

        $rules = [
            'name' => 'required',
            'email' => 'required| email', // Email phải duy nhất trong bảng User
            'password' => 'required| min:4',
            'confirmPassword' => 'same:password' // confirmPassword phải giống password
        ];

        $files = [
            'name' => 'Họ tên',
            'email' => 'Email',
            'password' => 'Mật khẩu',
            'confirmPassword' => 'Xác nhận mật khẩu',
        ];

        $validator = Validator::make($data, $rules, [], $files);
        $validator->validate();

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->is_admin = $request->is_admin;
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect()->route('danhsachnhanvien');
    }

    function dangxuat(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('dangnhap');
    }
}
