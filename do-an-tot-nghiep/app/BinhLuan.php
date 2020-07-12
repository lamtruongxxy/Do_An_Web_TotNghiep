<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BinhLuan extends Model
{
    protected $table = "binhluan";
    
    protected $fillable= [
        // 'ma_binh_luan',
        'masp',
        'nguoi_binh_luan',
        'thoi_gian_bl',
        'noi_dung_bl',
        'sdt_nguoi_bl',
        'trang_thai'
    ];
}
