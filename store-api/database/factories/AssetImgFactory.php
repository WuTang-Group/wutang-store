<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(\App\Models\AssetImg::class, function (Faker $faker) {
    return [
        'img' => $faker->imageUrl(),
        'img_location' => $faker->numberBetween(1,2),
        'type' => $faker->randomElement(['banner','discover','this_month_recommand']),
        'product_id' => $faker->numberBetween(1,10),
        'created_at' => $faker->dateTimeThisMonth(),
        'updated_at' => $faker->dateTimeThisMonth()
    ];
});
