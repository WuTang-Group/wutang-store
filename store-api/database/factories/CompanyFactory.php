<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(\App\Models\Company::class, function (Faker $faker) {
    return [
        'name' => $faker->company,
        'code' => \Illuminate\Support\Str::random(),
        'type' => $faker->numberBetween(1, 10),
        'address' => $faker->address,
        'tel_number' => $faker->phoneNumber,
        'contact_person' => $faker->name,
        'parent_id' => $faker->numberBetween(0, 30),
        'level' => $faker->numberBetween(1, 5),
        'status' => 1,
        'remark' => $faker->text,
        'created_at' => $faker->dateTimeThisYear,
        'updated_at' => $faker->dateTimeThisYear
    ];
});
