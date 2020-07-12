<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChuongTrinhKhuyenMai extends Model
{
    protected $table = "chuongtrinhkhuyenmai";

    protected $fillable= [
        // 'ma_chuong_trinh_km',
        'ten_chuong_trinh',
        'tgian_batdau',
        'tgian_ketthuc',
        'gia_tri_km',
        'loai_gia_tri',
        'toi_da',
        'trang_thai'
    ];
}
