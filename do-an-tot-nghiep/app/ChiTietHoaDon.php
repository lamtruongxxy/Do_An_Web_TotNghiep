<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChiTietHoaDon extends Model
{
    protected $table = "chi_tiet_hoa_don";

    protected $fillable= [
        'hoa_don_id',
        'san_pham_id',
        'so_luong',
        'don_gia',
        'trang_thai'
    ];
}
