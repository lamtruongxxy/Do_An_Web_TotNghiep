<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HinhAnhSP extends Model
{
    protected $table = "hinhanh";

    protected $fillable= [
        'mahinhanh',
        'duongdan',
        'trangthai',
        'masp'
    ];
}
