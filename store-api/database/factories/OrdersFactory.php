<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Models\Order::class, function (Faker $faker) {
    return [
        'no' =>$faker->randomNumber(8, true),
        'user_id' => $faker->randomElement([1, 2, 3, 4, 5,6, 7, 8, 9]),
        'address_id' => $faker->numberBetween(0, 30),
        'total_amount' => $faker->randomFloat(2, 5000, 12000),
        'remark' => $faker->sentence(5, true),
        'paid_at' => $faker->dateTime,
        'payment_method' => $faker->randomElement(['null','Alipay', 'UnionPay']),
        'payment_no' => $faker->randomNumber(5, true),
        'status' => $faker->randomElement([1, 0, -1]),
        'refund_status' => $faker->randomElement([1, -1]),
        'refund_no' => $faker->randomNumber(5, true),
        'closed' => $faker->randomElement([0, 1]),
        'reviewed' => $faker->randomElement([0, 1]),
        'ship_status' => $faker->randomElement([0, 1]),
        'created_at'=>$faker->dateTime,
        'updated_at'=>$faker->dateTime
    ];
});
