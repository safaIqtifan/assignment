<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\order_product::class, function (Faker $faker) {
    return [

        'id' =>$faker->randomNumber(4),
        'orderID' =>$faker->randomNumber(4),
        'productCode' =>$faker->randomNumber(4)


    ];
});
