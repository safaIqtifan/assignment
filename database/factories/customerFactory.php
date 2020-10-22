<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\customer::class, function (Faker $faker) {
    return [

        'id' =>$faker->randomNumber(4),
        'name' =>$faker->name,
        'salesRepEmployee' =>$faker->randomNumber(4)

    ];
});
