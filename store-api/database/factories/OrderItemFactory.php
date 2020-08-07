<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Models\OrderItem::class, function (Faker $faker) {
    return [
        'order_id' => $faker->randomElement([1, 2, 3, 4, 5,6, 7, 8, 9]),
        'product_id' => $faker->randomElement([1, 2, 3, 4, 5,6, 7, 8, 9]),
        'amount' => $faker->randomElement([1, 2, 3, 4, 5,6, 7, 8, 9]),
        'price' => $faker->randomFloat(2, 3000, 5000),
        'rating' => $faker->randomElement([0, 1]),
        'review' => $faker->sentence(5, true),
        'reviewed_at' => $faker->dateTime,
        'created_at'=>$faker->dateTime,
        'updated_at'=>$faker->dateTime
    ];
});
