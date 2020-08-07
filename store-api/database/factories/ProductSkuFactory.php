<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\ProductSku;
use Faker\Generator as Faker;

$factory->define(ProductSku::class, function (Faker $faker) {
    return [
        'title'=>$faker->words(3, true),
        'description'=>$faker->text ,
        'price'=>$faker->randomNumber(4),
        'stock'=>$faker->randomNumber(4),
        'product_id'=>$faker->randomElement([1,2,3,4,5,6,7,8,9,10]),
        'created_at'=>$faker->dateTime,
        'updated_at'=>$faker->dateTime
    ];
});
