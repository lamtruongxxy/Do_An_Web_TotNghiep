<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NhaSanXuat extends Model
{
    protected $table = "nhasanxuat";
    
    protected $fillable = [
        'manhasx',
        'tennhasx',
        'logonhasx',
        'trangthai'
    ];
}
