<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'NombreProducto'=>$faker->name,
        'categories_id'=>$faker->numberBetween(1, 4),
        'precio'=>$faker->randomFloat(2, 30, 1000) // 48.8932
    ];
});
