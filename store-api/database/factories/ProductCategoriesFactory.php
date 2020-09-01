<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Models\ProductCategory::class, function (Faker $faker) {
    return [
        'title'=>$faker->randomElement(['套装','面膜', '洁面', '套装B', '爽肤水', '眼霜', '套装A', '面霜', '套装C','眼线', '粉底液', 'BB霜', '隔离', '睫毛膏', '彩妆盘', '唇膏', '腮红', '香水', '精油', '身体护理']),
        'slug' => \Str::slug($faker->words(2, true)),
        'title_en'=>$faker->words(3, true),
        'describe'=>$faker->text ,
        'describe_en'=>$faker->text ,
        'banner'=>$faker->imageUrl(),
        'description'=>$faker->sentence(5, true),
        'description_en'=>$faker->sentence(5, true),
        'img'=>$faker->imageUrl(),
        'parent_id'=>$faker->numberBetween(0, 30),
        'created_at' => $faker->dateTimeThisMonth(),
        'updated_at' => $faker->dateTimeThisMonth()
    ];
});
