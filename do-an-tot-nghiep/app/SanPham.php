<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SanPham extends Model
{
    protected $table ='sanpham';

    protected $fillable =[
        'masp',
        'manhasanxuat',
        'tensp',
        'motasp',
        'giasp',
        'soluongtonkho',
        'loaisp',
        'chedobaohanh',
        'trangthai'
    ];
}
