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
        'sdt',
        'email',
        'dia_chi',
        'ho_ten',
        'anh_dai_dien',
        'trang_thai'
    ];
    protected $hidden = [
    	'mat_khau'
    ];
    public function getAuthPassword()
    {
    	return $this->mat_khau;
    }
}
