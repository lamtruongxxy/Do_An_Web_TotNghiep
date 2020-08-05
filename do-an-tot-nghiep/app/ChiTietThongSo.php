<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChiTietThongSo extends Model
{
    protected $table = 'chi_tiet_thong_so';

    protected $fillable = [
        'san_pham_id',
        'thong_so_id',
        'gia_tri',
        'trang_thai'
    ];

   public function thongSo()
   {
       return $this->belongsTo('App\ThongSo');
   }
}
