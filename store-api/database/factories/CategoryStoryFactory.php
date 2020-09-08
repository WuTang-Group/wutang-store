<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(\App\Models\ProductCategoryStory::class, function (Faker $faker) {
    return [
        'title'=>$faker->words(3, true),
        'title_en'=>$faker->words(3, true),
        'description'=>$faker->sentence(5, true),
        'description_en'=>$faker->sentence(5, true),
        'banner'=>$faker->imageUrl(),
        'product_category_id'=>$faker->numberBetween(1, 20),
        'created_at' => $faker->dateTimeThisMonth(),
        'updated_at' => $faker->dateTimeThisMonth()
    ];
});
