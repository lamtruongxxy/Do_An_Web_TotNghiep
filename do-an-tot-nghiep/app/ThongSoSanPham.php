<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ThongSoSanPham extends Model
{
    protected $table = 'thongsosp';

    protected $fillable = [
        'id_thong_so_sp',
        'masp',
        'gia_tri',
        'trang_thai'
    ];
}
