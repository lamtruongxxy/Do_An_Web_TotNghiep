<?php

use App\TaiKhoan;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class ThemTaiKhoanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TaiKhoan::create([
        	'ten_tai_khoan'=>'admin',
            'mat_khau'=>Hash::make('123456'),
            'sdt'=>'123456',
            'email'=>'anhtuaaa',
            'dia_chi'=>'aaaa',
            'ho_ten'=>'admin',
            'anh_dai_dien'=>'',
            'trang_thai' =>'1'
        ]);
    }
}
