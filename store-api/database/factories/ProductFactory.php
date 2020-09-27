<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'product_category_id' => $faker->numberBetween(1, 20),
        'slug' => \Str::slug($faker->words(2, true)),
        'product_name' => $faker->randomElement(['黑钻洁净滋养面膜', '钻石冰莹面膜', '钻石焕活面膜', '黑钻臻活眼部精华', '黑钻赋颜面霜', '黑钻肌光精华', '黑钻璀璨晶透肌底精华', '黑钻焕肤水']),
        'product_name_en' => $faker->words(3, true),
        'thumbnail' => $faker->imageUrl(),
        'short_description' => $faker->sentence(5, true),
        'short_description_en' => $faker->paragraph(3, true),
        'price' => $faker->randomNumber(4),
        'sale_price' => '1.00',
        'stock' => $faker->randomNumber(3),
        'spec' => $faker->randomElement(['50 ml / 1.7 fl. oz','30 ml / 1.0 oz.','60 ml / 2.0 oz','160 ml / 2.0 oz','150 ml / 2.0 oz']),
        'seo_title' => $faker->words(3, true),
        'seo_keyword' => $faker->word(),
        'seo_description' => $faker->sentence(5, true),
        'benefit' => $faker->paragraph(3, true),
        'benefit_en' => $faker->paragraph(3, true),
        'tech_description' => $faker->paragraph(3, true),
        'tech_description_en' => $faker->paragraph(3, true),
        'description' => $faker->paragraph(3, true),
        'description_en' => $faker->paragraph(3, true),
        'usage' => $faker->paragraph(3, true),
        'usage_en' => $faker->paragraph(3, true),
        'main_image' => $faker->imageUrl(),
        'main_image_2' => $faker->imageUrl(),
        'benefit_image' => $faker->imageUrl(),
        'status' => $faker->numberBetween(1, 3),
        'rating' => $faker->randomFloat(2, 0, 10),
        'sold_count' => $faker->randomNumber(4, true),
        'review_count' => $faker->randomNumber(4, true),
        'created_at' => $faker->dateTimeThisMonth(),
        'updated_at' => $faker->dateTimeThisMonth()
    ];
});
