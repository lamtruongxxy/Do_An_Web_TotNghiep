<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ThongSo extends Model
{
    protected $table = "thongso";

    protected $fillable = [
        'id_thongso',
        'tenthongso',
        'donvi',
        'trangthai',
    ];
}
