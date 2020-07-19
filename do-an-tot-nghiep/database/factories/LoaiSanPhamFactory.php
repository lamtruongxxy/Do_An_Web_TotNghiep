<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\LoaiSanPham;
use Faker\Generator as Faker;

$factory->define(LoaiSanPham::class, function (Faker $faker) {
    return [
        'ten_loai_sp'   => $faker->name,
        'ghi_chu'       => $faker->sentence,
        'trang_thai'    => rand(0, 1)
    ];
});
