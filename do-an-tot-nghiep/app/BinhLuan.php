<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BinhLuan extends Model
{
    protected $table = "binhluan";

    protected $fillable= [
        'mabinhluan',
        'masp',
        'nguoibinhluan',
        'thoigianbl',
        'noidungbl',
        'sdtnguoibl',
        'trangthai'
    ];
}
