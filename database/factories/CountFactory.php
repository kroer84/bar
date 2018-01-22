<?php

use Faker\Generator as Faker;

$factory->define(App\Count::class, function (Faker $faker) {
    return [
        'user_id' => $faker->biasedNumberBetween($min = 1, $max = 4, $function = 'sqrt'),
        'status_counts_id'=> $faker->biasedNumberBetween($min = 1, $max = 4, $function = 'sqrt'),
        'NombreCliente'=> $faker->name
    ];
});
