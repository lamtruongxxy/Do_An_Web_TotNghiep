<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoaiSP extends Model
{
    protected $table= "loaisp";

    protected $fillable= [
        'id_loai',
        'ten_loai_sp',
        'ghichu',
        'trangthai',
    ];
}
