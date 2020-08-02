<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\BinhLuan;
use Faker\Generator as Faker;

$factory->define(BinhLuan::class, function (Faker $faker) {
    return [
        'san_pham_id' => App\SanPham::pluck('id')->random(),
        'nguoi_binh_luan' => $faker->name,
        'noi_dung_bl'     => $faker->sentence,
        'sdt_nguoi_bl' => "012345689",
        'trang_thai'    => rand(0, 1)
    ];
});
