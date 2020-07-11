<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HoaDon extends Model
{
    protected $table = "hoadon";

    protected $fillable= [
        'mahd',
        'tennguoimua',
        'ngaylap',
        'tennguoinhan',
        'diachigiaohang',
        'sdtgiaohang',
        'tongtien',
        'trangthai'
    ];
}
