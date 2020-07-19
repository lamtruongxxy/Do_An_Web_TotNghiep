<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\NhaSanXuat;
use Faker\Generator as Faker;

$factory->define(NhaSanXuat::class, function (Faker $faker) {
    return [
        'ten_nha_sx'    => $faker->name,
        'logo_nha_sx'   => "http://lorempixel.com/200/200/",
        'trang_thai'    => rand(0, 1)
    ];
});
