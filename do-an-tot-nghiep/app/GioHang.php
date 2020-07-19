<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GioHang extends Model
{
    protected $table = "gio_hang";

    protected $fillable= [
        // 'id_gio_hang',
        'nguoi_mua',
        'san_pham_id',
        'so_luong',
        'trang_thai'
    ];
}
