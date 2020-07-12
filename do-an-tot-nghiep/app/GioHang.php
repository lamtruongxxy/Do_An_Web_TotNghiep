<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GioHang extends Model
{
    protected $table = "giohang";

    protected $fillable= [
        // 'id_gio_hang',
        'nguoi_mua',
        'masp',
        'so_luong',
        'trang_thai'
    ];
}
