<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NhaSanXuat extends Model
{
    protected $table = "nhasanxuat";
    
    protected $fillable = [
        // 'ma_nha_sx',
        'ten_nha_sx',
        'logo_nha_sx',
        'logo_nha_sx'
    ];
}
