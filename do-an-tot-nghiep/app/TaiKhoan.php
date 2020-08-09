<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class TaiKhoan extends Authenticatable
{
    protected $table = "tai_khoan";

    protected $fillable = [
        'ten_tai_khoan',
        'mat_khau',
        'ho_ten',
        'email',
        'sdt',
        'dia_chi',
        'trang_thai',
        'anh_dai_dien'
    ];
    protected $hidden = [
    	'mat_khau'
    ];
    public function getAuthPassword()
    {
    	return $this->mat_khau;
    }
}
