<?php

use App\Actor;
use Faker\Generator as Faker;

$factory->define(Actor::class, function (Faker $faker) {
    return [
        'name' => $faker->name(),
    ];
});
