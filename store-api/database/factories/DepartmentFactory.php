<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(\App\Models\Department::class, function (Faker $faker) {
    return [
        'company_id' => $faker->numberBetween(1, 30),
        'name' => $faker->randomElement(['技术部','数据部','财务部','人事部','总经办']),
        'code' => \Illuminate\Support\Str::random(),
        'leader' => $faker->name,
        'parent_id' => $faker->numberBetween(0, 30),
        'level' => $faker->numberBetween(1, 5),
        'status' => 1,
        'remark' => $faker->text,
        'created_at' => $faker->dateTimeThisYear,
        'updated_at' => $faker->dateTimeThisYear
    ];
});
