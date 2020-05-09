<?php

use App\Movie;
use Faker\Generator as Faker;

$factory->define(Movie::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(6, true),
        'premiere_year' => $faker->year(),
        'duration' => $faker->numberBetween(100, 350),
        'cover' => $faker->imageUrl(350, 350),
        'synopsis' => $faker->text(),
    ];
});