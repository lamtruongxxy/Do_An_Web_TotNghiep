<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TaiKhoan extends Model
{
    protected $table = "taikhoan";

    protected $fillable = [
        'tentaikhoan',
        'matkhau',
        'sdt',
        'email',
        'diachi',
        'hoten',
        'anhdaidien',
        'trangthai'
    ];
}
