<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        Category::create([
            'NombreCategoria' => 'Cervezas'
        ]);

        Category::create([
            'NombreCategoria' => 'Cocktails'
        ]);

        Category::create([
            'NombreCategoria' => 'Refrescos'
        ]);

        Category::create([
            'NombreCategoria' => 'Cafes'
        ]);
    }
}
