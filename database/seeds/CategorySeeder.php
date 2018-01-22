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
            'NombreCategoria' => 'Categoria 1'
        ]);

        Category::create([
            'NombreCategoria' => 'Categoria 2'
        ]);

        Category::create([
            'NombreCategoria' => 'Categoria 3'
        ]);

        Category::create([
            'NombreCategoria' => 'Categoria 4'
        ]);
    }
}
