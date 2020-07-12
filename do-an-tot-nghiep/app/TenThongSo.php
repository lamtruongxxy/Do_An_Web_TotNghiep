<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TenThongSo extends Model
{
    protected $table = "tenthongso";

    protected $fillable = [
        // 'id_thong_so',
        'ten_thong_so',
        'don_vi',
        'trang_thai',
    ];
}
