<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(\App\Models\TheHouse::class, function (Faker $faker) {
    return [
        'the_house_category_id' => $faker->numberBetween(1,3),
        'banner' => $faker->imageUrl(),
        'title' => $faker->words(3, true),
        'sub_title' => $faker->words(3, true),
        'describe' => $faker->text,
        'created_at' => $faker->dateTimeThisYear,
        'updated_at' => $faker->dateTimeThisYear
    ];
});
