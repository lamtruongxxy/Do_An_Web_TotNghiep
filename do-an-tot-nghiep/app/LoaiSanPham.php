<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoaiSanPham extends Model
{
    protected $table= "loai_san_pham";

    protected $fillable= [
        'ten_loai_sp',
        'ghi_chu',
        'trang_thai',
    ];
}
