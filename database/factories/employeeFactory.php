<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\employee::class, function (Faker $faker) {
    return [

        'id' =>$faker->randomNumber(4),
        'email' => $faker->unique()->safeEmail,

    ];
});
