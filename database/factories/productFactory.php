<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\product::class, function (Faker $faker) {
    return [

        'code' =>$faker->randomNumber(4),
        'productlineID' =>$faker->randomNumber(4)

    ];
});
