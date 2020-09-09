<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(\App\Models\MemberCode::class, function (Faker $faker) {
    return [
        'code' => \Illuminate\Support\Str::random(),
        'user_name' => $faker->name,
        'parent_id' => $faker->numberBetween(0,29),
        'status' => 1,
        'remark' => $faker->text,
        'created_at' => $faker->dateTimeThisYear,
        'updated_at' => $faker->dateTimeThisYear
    ];
});
