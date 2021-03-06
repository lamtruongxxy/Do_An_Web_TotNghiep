<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\DonHang;
use Faker\Generator as Faker;

$factory->define(DonHang::class, function (Faker $faker) {
    return [
        'khach_hang_id'   => App\KhachHang::pluck('id')->random(),
        'tong_tien'       => rand(10000,999999),
        'ghi_chu'         =>$faker->sentence,
        'hinh_thuc_thanh_toan' => rand(0,1),
        'trang_thai'    => rand(0, 3)
    ];
});
