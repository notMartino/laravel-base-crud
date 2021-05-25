<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

use App\Guest;

$factory->define(Guest::class, function (Faker $faker) {
    return [
        'firstname' => $faker -> firstname,
        'lastname' => $faker -> lastname,
        'address' => $faker -> streetAddress,
        'postalcode' => $faker -> postcode,
        'payment' => $faker -> randomFloat($nbMaxDecimals = 2, $min = 40, $max = 5000),
        'room' => $faker -> numberBetween($min = 100, $max = 400),
    ];
});
