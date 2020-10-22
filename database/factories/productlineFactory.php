<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\productline::class, function (Faker $faker) {
    return [

        'id' =>$faker->randomNumber(4),
        'descInText' =>$faker->word,
        'descInHTML' =>$faker->word,
        'image' =>$faker->word

    ];
});
