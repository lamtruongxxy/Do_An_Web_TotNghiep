<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KhuyenMaiSP extends Model
{
    protected $table= "khuyenmaisp";

    protected $fillable= [
        'id_chuongtrinhkm',
        'masp',
        'trangthai'
    ];
}
