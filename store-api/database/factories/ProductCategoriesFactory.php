<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(\App\Models\ProductCategory::class, function (Faker $faker) {
    return [
        'name'=>$faker->randomElement(['面膜', '洁面', '爽肤水', '眼霜', '面霜', '眼线', '粉底液', 'BB霜', '隔离', '睫毛膏', '彩妆盘', '唇膏', '腮红', '香水', '精油', '身体护理']),
        'slug' => \Str::slug($faker->words(2, true)),
        'thumbnail' => \App\Handlers\RandomImageHandler::generateImage()->img_url,
        'banner'=>\App\Handlers\RandomImageHandler::generateImage()->img_url,
        'title' => $faker->words(3, true),
        'title_en'=>$faker->words(3, true),
        'sub_title' => $faker->words(3, true),
        'describe'=>$faker->text ,
        'describe_en'=>$faker->text ,
        'describe_img' => \App\Handlers\RandomImageHandler::generateImage()->img_url,
        'parent_id'=>$faker->numberBetween(0, 30),
        'created_at' => $faker->dateTimeThisMonth(),
        'updated_at' => $faker->dateTimeThisMonth()
    ];
});
