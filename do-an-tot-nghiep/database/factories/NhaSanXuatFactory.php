<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\NhaSanXuat;
use Faker\Generator as Faker;

$factory->define(NhaSanXuat::class, function (Faker $faker) {
    return [
        'ten_nha_sx'    => $faker->name,
        'ghi_chu'   => "đay là thông tin ghi chú",
        'trang_thai'    => rand(0, 1)
    ];
});
