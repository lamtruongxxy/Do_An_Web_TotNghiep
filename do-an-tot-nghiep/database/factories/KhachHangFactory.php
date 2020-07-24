<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\KhachHang;
use Faker\Generator as Faker;

$factory->define(KhachHang::class, function (Faker $faker) {
        return [
            'ten_khach_hang'   => $faker->name,
            'dia_chi'       => $faker->sentence,
            'sdt'    => "0123456789",
            'email' => "abcdedd@gmail.com",
            'trang_thai'    => rand(0, 1)
        ];
});
