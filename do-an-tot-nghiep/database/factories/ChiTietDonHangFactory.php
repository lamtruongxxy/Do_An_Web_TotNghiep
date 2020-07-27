<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ChiTietDonHang;
use Faker\Generator as Faker;

$factory->define(ChiTietDonHang::class, function (Faker $faker) {
    return [
        'don_hang_id'   => App\DonHang::pluck('id')->random(),
        'san_pham_id'  =>App\SanPham::pluck('id')->random(),
        'so_luong'       => rand(1,2),
        'don_gia'         => rand(100,9000), 
        'trang_thai'    => rand(0, 3)
    ];
});
