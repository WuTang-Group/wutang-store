<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Models\InvitationCode::class, function (Faker $faker) {
    return [
        'code' => \Illuminate\Support\Str::random(6),
        'user_id' => \Illuminate\Support\Arr::random([1,2,3,4,5]),
        'valid_until' => $faker->dateTime,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime
    ];
});
