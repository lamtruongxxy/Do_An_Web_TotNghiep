<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KhuyenMaiSanPham extends Model
{
    protected $table= "khuyen_mai_san_pham";

    protected $fillable= [
        'chuong_trinh_khuyen_mai_id',
        'san_pham_id',
        'trang_thai'
    ];
}
