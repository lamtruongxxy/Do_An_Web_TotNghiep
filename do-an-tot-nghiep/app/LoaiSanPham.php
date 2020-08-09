<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoaiSanPham extends Model
{
    protected $table= "loai_san_pham";

    protected $fillable= [
        'ten_loai_sp',
        'ghi_chu',
        'trang_thai'
    ];

    public function sanPham(){
        return $this->hasMany('App\SanPham','loai_san_pham_id', 'id' );
    }
    public function getTrangThaiFormatAttribute() {
        return $this->trang_thai ? "Hiện" : "Ẩn";
    }
}
