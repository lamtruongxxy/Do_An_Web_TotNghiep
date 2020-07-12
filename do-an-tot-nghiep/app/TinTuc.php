<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TinTuc extends Model
{
    protected $table = 'tintuc';

    protected $fillable = [
        // 'ma_tin_tuc',
        'tieu_de',
        'nguoi_dang',
        'ngay_dang',
        'bai_viet',
        'trang_thai'
    ];
}
