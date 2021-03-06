<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(\App\Models\ShopCartItem::class, function (Faker $faker) {
    return [
        'user_id'=>$faker->numberBetween(1, 50),
        'product_id'=>$faker->numberBetween(1, 30),
        'amount'=>$faker->numberBetween(1, 10),
        'created_at'=>$faker->dateTimeThisMonth(),
        'updated_at'=>$faker->dateTimeThisMonth()
    ];
});
