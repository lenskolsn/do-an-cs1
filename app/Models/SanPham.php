<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class SanPham extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function danh_mucs(){
        return $this->hasOne(DanhMuc::class, 'id', 'id_danhmuc');
    }
    public function scopeSearch($query){
        if($key = request()->key){
            $query = $query->where('tensanpham','like', '%' . $key . '%');
        }
        return $query;
    }
}
