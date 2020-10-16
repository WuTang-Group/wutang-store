<?php

/** @var Factory $factory */

use App\Models\TheHouseContent;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

$factory->define(TheHouseContent::class, function (Faker $faker) {
    $fakerDataHandler = new \App\Handlers\FakerDataHandler();
    return [
        'the_house_id' => $faker->numberBetween(1,50),
        'title' => $faker->words(3, true),
        'content' => $faker->text,
        'img' => $fakerDataHandler->getImageUrl(),
        'img_desc' => $faker->words(3, true),
        'created_at' => $faker->dateTimeThisYear,
        'updated_at' => $faker->dateTimeThisYear
    ];
});
