<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KhachHang extends Model
{
    protected $table = "khach_hang";

    protected $fillable= [
        'ten_khach_hang',
        'dia_chi',
        'sdt',
        'email',
        'trang_thai'
    ];
}
