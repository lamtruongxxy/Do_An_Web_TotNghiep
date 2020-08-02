<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ThongSo extends Model
{
    protected $table = "thong_so";

    protected $fillable = [
        'ten_thong_so',
        'don_vi',
        'trang_thai',
    ];
}
