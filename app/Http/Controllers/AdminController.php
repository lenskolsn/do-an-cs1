<?php

namespace App\Http\Controllers;

use App\Models\DanhMuc;
use App\Models\SanPham;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    function index(){
        return view('admin.login');
    }
    function dashboard(){
        $sp = SanPham::count();
        $dm = DanhMuc::count();
        $tk = User::count();
        $dh = 20;
        return view('admin.index',compact('sp','dm','tk','dh'));
    }
}
