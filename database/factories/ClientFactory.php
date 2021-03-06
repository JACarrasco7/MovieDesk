<?php

use App\Client;
use Faker\Generator as Faker;

$factory->define(Client::class, function (Faker $faker) {
    return [
        'name' => $faker->name(),
        'phone' => $faker->e164PhoneNumber,   
    ];
});