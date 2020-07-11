<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChiTietHoaDon extends Model
{
    protected $table = "chitiethoadon";

    protected $fillable= [
        'mahd',
        'masp',
        'soluong',
        'dongia',
        'trangthai'
    ];
}
