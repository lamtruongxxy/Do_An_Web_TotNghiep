<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KhachHang extends Model
{
    protected $table = "khach_hang";

    protected $fillable= [
        'ten_khach_hang',
        'gioi_tinh',
        'dia_chi',
        'sdt',
        'email',
        'ghi_chu',
        'trang_thai'
    ];
    public function donHang()
    {
        return $this->hasMany('App\DonHang');
    }
}
