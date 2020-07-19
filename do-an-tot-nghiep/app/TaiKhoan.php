<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TaiKhoan extends Model
{
    protected $table = "tai_khoan";

    protected $fillable = [
        'ten_tai_khoan',
        'mat_khau',
        'sdt',
        'email',
        'dia_chi',
        'ho_ten',
        'anh_dai_dien',
        'trang_thai'
    ];
}
