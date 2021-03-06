<?php

use Faker\Generator as Faker;

$factory->define(App\CountProduct::class, function (Faker $faker) {
    return [
        'counts_id' =>$faker->numberBetween(1, 100),
        'products_id'=>$faker->numberBetween(1, 23),
        'cantidad'=>$faker->numberBetween(1, 10),
        'status_count_products_id'=>$faker->numberBetween(1, 2),
    ];
});
