<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\order::class, function (Faker $faker) {
    return [

        'id' =>$faker->randomNumber(4),
        'customerID' =>$faker->randomNumber(4)

    ];
});
