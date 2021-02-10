<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Postal;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Postal::class, function (Faker $faker) {
    $address_all = $faker->address();
    $address = explode(" ", $address_all, 2);
    $code1 = floor($address[0] / 10000);
    $code2 = $address[0] % 10000;

    return [
        'postal_code' => $code1 . "-" . $code2,
    ];
});
