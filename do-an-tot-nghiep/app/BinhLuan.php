<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BinhLuan extends Model
{
    protected $table = "binh_luan";
    
    protected $fillable= [
        // 'ma_binh_luan',
        'san_pham_id',
        'nguoi_binh_luan',
        'noi_dung_bl',
        'sdt_nguoi_bl',
        'trang_thai'
    ];
    public function sanPham() {
        return $this->belongsTo('App\SanPham');
    }
    public function getTrangThaiFormatAttribute() {
        return $this->trang_thai ? "Hiện" : "Ẩn";
    }
}
