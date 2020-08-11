<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(\App\Models\Profile::class, function (Faker $faker) {
    $addresses = [
        ["北京市", "市辖区", "东城区"],
        ["河北省", "石家庄市", "长安区"],
        ["江苏省", "南京市", "浦口区"],
        ["江苏省", "苏州市", "相城区"],
        ["广东省", "深圳市", "南山区"],
    ];
    $address = $faker->randomElement($addresses);

    return [
        'user_id' => $faker->unique()->numberBetween(1, 51),
        'real_name' => $faker->name,
        'sex' => $faker->randomElement([1,0]),
        'birthday' => $faker->date(),
        'age' => $faker->randomElement([22,23,24,25,26,27,28,29,30]),
        'phone'=> $faker->phoneNumber,
        'province'=> $address[0],
        'city'=> $address[1],
        'district'=> $address[2],
        'address'=> sprintf('第%d街道第%d号', $faker->randomNumber(2), $faker->randomNumber(3)),
        'zip'=> $faker->postcode,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime
    ];
});
