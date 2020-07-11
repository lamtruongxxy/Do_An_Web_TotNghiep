<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChuongTrinhKhuyenMai extends Model
{
    protected $table = "chuongtrinhkhuyenmai";

    protected $fillable= [
        'machuongtrinhkm',
        'tenchuongtrinh',
        'tgianbatdau',
        'tgianketthuc',
        'giatrikm',
        'loaigiatri',
        'toida',
        'trangthai'
    ];
}
