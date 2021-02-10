<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Grades;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Grades::class, function (Faker $faker) {
    $run = $faker->randomFloat($nbMaxDecimals = 1, $min = 10, $max = 50);
    $step = $run * 1000;
    
    return [
        'user_id' => $faker->numberBetween(1,50),
        'run' => $run,
        'time' => $faker->numberBetween(15,40) . ":" .$faker->numberBetween(00,59),
        'kcal' => $faker->numberBetween(100,500),
        'step' => $step,
        'day' => $faker->dateTimeBetween('-20 years', '0years')->format('Y-m-d')
    ];
});
