<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HoaDon extends Model
{
    protected $table = "hoa_don";

    protected $fillable= [
        'ten_nguoi_mua',
        'ngay_lap',
        'ten_nguoi_nhan',
        'dia_chi_gia_ohang',
        'sdt_giao_hang',
        'tong_tien',
        'trang_thai'
    ];
}
