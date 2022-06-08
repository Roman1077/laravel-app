<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\State;
use Faker\Generator as Faker;

$factory->define(State::class, function (Faker $faker) {
    return [
        'likes' => $faker->numberBetween($min=1, $max=20),
        'views' => $faker->numberBetween($min=21, $max=100)
    ];
});
