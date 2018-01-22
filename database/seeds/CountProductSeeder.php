<?php

use Illuminate\Database\Seeder;
use App\CountProduct;

class CountProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CountProduct::create([
            'counts_id'=>1,
            'products_id'=>8,
            'cantidad'=>2,
            'status_count_products_id'=>1
        ]);
        CountProduct::create([
            'counts_id'=>1,
            'products_id'=>7,
            'cantidad'=>10,
            'status_count_products_id'=>1
        ]);
        CountProduct::create([
            'counts_id'=>1,
            'products_id'=>6,
            'cantidad'=>3,
            'status_count_products_id'=>2
        ]);
        CountProduct::create([
            'counts_id'=>2,
            'products_id'=>5,
            'cantidad'=>4,
            'status_count_products_id'=>1
        ]);
        CountProduct::create([
            'counts_id'=>2,
            'products_id'=>4,
            'cantidad'=>2,
            'status_count_products_id'=>1
        ]);
        CountProduct::create([
            'counts_id'=>3,
            'products_id'=>2,
            'cantidad'=>4,
            'status_count_products_id'=>2
        ]);
        CountProduct::create([
            'counts_id'=>4,
            'products_id'=>1,
            'cantidad'=>10,
            'status_count_products_id'=>2
        ]);
     
        factory(CountProduct::class, 100)->create();
        
    }
}
