<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'username' => Str::random(15),
        'email' => $faker->unique()->safeEmail,
        'phone' => $faker->phoneNumber,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
        'invitation_code' => Str::random(6),
        'avatar' => 'http://thirdwx.qlogo.cn/mmopen/vi_32/M5SibDXA0k8bbEGpFAZkyNcUCBZicicgY2RNMEMcoJFwubweq7uocgq6EiacaYpNTFswWicSSfTIYOBKZPnLLwnKgqw/132',
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime
    ];
});
