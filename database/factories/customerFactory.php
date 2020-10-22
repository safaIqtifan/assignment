<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\customer::class, function (Faker $faker) {
    return [

        'id' =>$faker->randomNumber(4),
        'salesRepEmployee' =>$faker->randomNumber(4),
        'name' =>$faker->name,
        'firstName' =>$faker->name,
        'lastName' =>$faker->name,
        'phone' =>$faker->phoneNumber,
        'address2' =>$faker->address,
        'city' =>$faker->city,
        'state' =>$faker->state,
        //'postalCode' =>$faker->postcode,
        'country' =>$faker->country

    ];
});
