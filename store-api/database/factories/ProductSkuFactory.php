<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\ProductSku;
use Faker\Generator as Faker;

$factory->define(ProductSku::class, function (Faker $faker) {
    return [
        'title'=>$faker->words(3, true),
        'description'=>$faker->words(5, true) ,
        'price'=>$faker->randomNumber(4),
        'stock'=>$faker->randomNumber(4),
        'product_id'=>$faker->numberBetween(1,10),
        'created_at'=>$faker->dateTime,
        'updated_at'=>$faker->dateTime
    ];
});
