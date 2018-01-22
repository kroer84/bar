<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'categories_id'=>1,
            'NombreProducto'=>'1° producto',
            'precio'=>1000
        ]);

        Product::create([
            'categories_id'=>1,
            'NombreProducto'=>'2° producto',
            'precio'=>2000
        ]);

        Product::create([
            'categories_id'=>2,
            'NombreProducto'=>'3° producto',
            'precio'=>3000
        ]);

        Product::create([
            'categories_id'=>2,
            'NombreProducto'=>'4° producto',
            'precio'=>4000
        ]);

        Product::create([
            'categories_id'=>3,
            'NombreProducto'=>'5° producto',
            'precio'=>5000
        ]);

        Product::create([
            'categories_id'=>3,
            'NombreProducto'=>'6° producto',
            'precio'=>6000
        ]);

        Product::create([
            'categories_id'=>4,
            'NombreProducto'=>'7° producto',
            'precio'=>7000
        ]);

        Product::create([
            'categories_id'=>4,
            'NombreProducto'=>'8° producto',
            'precio'=>8000
        ]);

        factory(Product::class, 100)->create();
    }
}
