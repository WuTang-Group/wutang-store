<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(\App\Models\Profile::class, function (Faker $faker) {
    return [
        'user_id' => $faker->unique()->numberBetween(1, 51),
        'real_name' => $faker->name,
        'sex' => $faker->randomElement([1,0]),
        'birthday' => $faker->date(),
        'age' => $faker->randomElement([22,23,24,25,26,27,28,29,30]),
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime
    ];
});
