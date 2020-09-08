<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(\App\Models\TheHouseCategory::class, function (Faker $faker) {
    return [
        'name' => $faker->randomElement(['精湛科艺', '精彩内容', '品牌介绍']),
        'slug' => \Str::slug($faker->words(2, true)),
        'banner' => $faker->imageUrl(),
        'title' => $faker->words(3, true),
        'sub_title' => $faker->words(3, true),
        'created_at' => $faker->dateTimeThisYear,
        'updated_at' => $faker->dateTimeThisYear
    ];
});
