<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DonHang extends Model
{
    protected $table = "don_hang";

    protected $fillable= [
        'khach_hang_id',
        'tong_tien',
        'ghi_chu',
        'hinh_thuc_thanh_toan',
        'trang_thai'
    ];

    public function khachHang() {
        return $this->belongsTo('App\KhachHang');
    }
}
