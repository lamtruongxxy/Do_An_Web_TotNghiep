<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NhaSanXuat extends Model
{
    protected $table = "nha_san_xuat";
    
    protected $fillable = [
        'ten_nha_sx',
        'ghi_chu',
        'trang_thai'
    ];
    public function getTrangThaiFormatAttribute() {
        return $this->trang_thai ? "Hiện" : "Ẩn";
    }
    public function sanPham()
    {
        return $this->hasMany('App\SanPham','nha_san_xuat_id','id');
    }
}
