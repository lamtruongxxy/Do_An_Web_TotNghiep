<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NhaSanXuat extends Model
{
    protected $table = "nha_san_xuat";
    
    protected $fillable = [
        'ten_nha_sx',
        'logo_nha_sx',
        'trang_thai'
    ];
}
