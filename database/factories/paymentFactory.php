<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\payment::class, function (Faker $faker) {
    return [

        'checkNum' =>$faker->word,
        'customerID' =>$faker->randomNumber(4)

    ];
});
