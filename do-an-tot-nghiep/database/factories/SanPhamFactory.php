<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\SanPham;
use Faker\Generator as Faker;

$factory->define(SanPham::class, function (Faker $faker) {
    return [
        'nha_san_xuat_id'   => App\NhaSanXuat::pluck('id')->random(),
        'ten_sp'    => $faker->name,
        'mo_ta_sp'  => $faker->sentence,
        'gia_sp'    => rand(500, 10000),
        'so_luong_ton_kho'  => rand(10, 100),
        'loai_san_pham_id'  => App\LoaiSanPham::pluck('id')->random(),
        'che_do_bao_hanh'   => $faker->name,
        'trang_thai'    => rand(0, 1)
    ];
});
