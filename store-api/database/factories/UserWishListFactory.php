<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(\App\Models\UserWishList::class, function (Faker $faker) {
    return [
        'user_id' => $faker->numberBetween(1,20),
        'product_id' => $faker->numberBetween(1,20),
        'created_at'=>$faker->dateTime,
        'updated_at'=>$faker->dateTime
    ];
});
