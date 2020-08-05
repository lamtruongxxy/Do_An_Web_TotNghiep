<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class SanPham extends Model
{
    protected $table ='san_pham';

    protected $fillable =[
        // 'masp',
        'nha_san_xuat_id',
        'ten_sp',
        'mo_ta_sp',
        'gia_sp',
        'gia_khuyen_mai',
        'so_luong_ton_kho',
        'loai_san_pham_id',
        'che_do_bao_hanh',
        'trang_thai'
    ];

    public function loaiSanPham() {
        return $this->belongsTo('App\LoaiSanPham');
    }
    public function nhaSanXuat() {
        return $this->belongsTo('App\NhaSanXuat');
    }
    public function chiTietThongSo() {
        return $this->belongsTo('App\ChiTietThongSo');
    }
    // public function hinhAnhSP()
    // {
    //     return $this->belongsTo('App\HinhAnhSanPham');
    // }
    
}
