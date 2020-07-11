<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GioHang extends Model
{
    protected $table = "giohang";

    protected $fillable= [
        'id_giohang',
        'nguoimua',
        'masp',
        'soluong',
        'trangthai'
    ];
}
