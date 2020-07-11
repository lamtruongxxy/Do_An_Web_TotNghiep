<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TinTuc extends Model
{
    protected $table = 'tintuc';

    protected $fillable = [
        'matintuc',
        'tieude',
        'nguoidang',
        'baiviet',
        'trangthai'
    ];
}
