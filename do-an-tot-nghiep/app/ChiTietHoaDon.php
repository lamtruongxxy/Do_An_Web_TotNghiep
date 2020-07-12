<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChiTietHoaDon extends Model
{
    protected $table = "chitiethoadon";

    protected $fillable= [
        'mahd',
        'masp',
        'so_luong',
        'don_gia',
        'trang_thai'
    ];
}
