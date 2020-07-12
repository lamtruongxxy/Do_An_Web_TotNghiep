<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HinhAnhSP extends Model
{
    protected $table = "hinhanh";

    protected $fillable= [
        // 'ma_hinh_anh',
        'masp',
        'url',
        'trang_thai'
    ];
}
