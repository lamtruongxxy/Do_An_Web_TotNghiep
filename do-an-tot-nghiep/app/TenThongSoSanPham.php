<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TenThongSoSanPham extends Model
{
    protected $table = 'tenthongsosp';

    protected $fillable = [
        'id_thongsosp',
        'masp',
        'giatri',
        'trangthai'
    ];
}
