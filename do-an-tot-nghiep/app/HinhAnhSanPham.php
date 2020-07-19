<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HinhAnhSanPham extends Model
{
    protected $table = "hinh_anh_san_pham";

    protected $fillable= [
        // 'ma_hinh_anh',
        'san_pham_id',
        'duong_dan',
        'trang_thai'
    ];
}
