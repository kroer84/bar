<?php

use Faker\Generator as Faker;

$factory->define(App\StatusCount::class, function (Faker $faker) {
    return [
        
        'NombreEstado' => $faker->randomElement(['Categoria 1','categoria 2','categoria 3','categoria 4'])
    ];
});
