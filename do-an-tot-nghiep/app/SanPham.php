<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SanPham extends Model
{
    protected $table ='sanpham';

    // protected $fillable =[
    //     // 'masp',
    //     'ma_nha_sx',
    //     'ten_sp',
    //     'mo_ta_sp',
    //     'gia_sp',
    //     'so_luong_ton_kho',
    //     'loai_sp',
    //     'che_do_bao_hanh',
    //     'trang_thai'
    // ];

    public function loaiSP()
    {
    	return $this->belongsTo('App\LoaiSP');
    }

}
