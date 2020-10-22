<?php

/** @var Factory $factory */

use App\office;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

$factory->define(office::class, function (Faker $faker) {
    return [

        'code' =>$faker->randomNumber(4),
        'city' =>$faker->word

    ];
});
