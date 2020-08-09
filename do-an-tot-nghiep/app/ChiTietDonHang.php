<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChiTietDonHang extends Model
{
    protected $table = "chi_tiet_don_hang";

    protected $fillable= [
        'don_hang_id',
        'san_pham_id',
        'so_luong',
        'don_gia',
        'trang_thai'
    ];
    public function sanPham()
    {
        return $this->belongsTo('App\SanPham');
    }
}
