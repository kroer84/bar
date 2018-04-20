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
            'NombreProducto'=>'Indio',
            'precio'=>30
        ]);

        Product::create([
            'categories_id'=>1,
            'NombreProducto'=>'Sol',
            'precio'=>30
        ]);

        Product::create([
            'categories_id'=>1,
            'NombreProducto'=>'xx lager',
            'precio'=>35
        ]);

        Product::create([
            'categories_id'=>1,
            'NombreProducto'=>'Corona',
            'precio'=>30
        ]);

        Product::create([
            'categories_id'=>1,
            'NombreProducto'=>'heineken',
            'precio'=>35
        ]);

        Product::create([
            'categories_id'=>2,
            'NombreProducto'=>'Margarita',
            'precio'=>50
        ]);

        Product::create([
            'categories_id'=>2,
            'NombreProducto'=>'Martini',
            'precio'=>50
        ]);

        Product::create([
            'categories_id'=>2,
            'NombreProducto'=>'Mojito',
            'precio'=>55
        ]);

        Product::create([
            'categories_id'=>2,
            'NombreProducto'=>'Bloody Mary',
            'precio'=>50
        ]);

        Product::create([
            'categories_id'=>2,
            'NombreProducto'=>'Piña colada',
            'precio'=>50
        ]);

        Product::create([
            'categories_id'=>2,
            'NombreProducto'=>'Cubalibre',
            'precio'=>55
        ]);

        Product::create([
            'categories_id'=>3,
            'NombreProducto'=>'Coca cola',
            'precio'=>50
        ]);

        Product::create([
            'categories_id'=>3,
            'NombreProducto'=>'Fanta',
            'precio'=>50
        ]);

        Product::create([
            'categories_id'=>3,
            'NombreProducto'=>'Sprite',
            'precio'=>55
        ]);

        Product::create([
            'categories_id'=>3,
            'NombreProducto'=>'Fresca',
            'precio'=>50
        ]);

        Product::create([
            'categories_id'=>3,
            'NombreProducto'=>'Del valle',
            'precio'=>50
        ]);

        Product::create([
            'categories_id'=>3,
            'NombreProducto'=>'Mundet',
            'precio'=>55
        ]);

        Product::create([
            'categories_id'=>4,
            'NombreProducto'=>'Café expreso',
            'precio'=>45
        ]);

        Product::create([
            'categories_id'=>4,
            'NombreProducto'=>'Café cortado',
            'precio'=>35
        ]);

        Product::create([
            'categories_id'=>4,
            'NombreProducto'=>'Café capuchino',
            'precio'=>60
        ]);

        Product::create([
            'categories_id'=>4,
            'NombreProducto'=>'Café irlandés',
            'precio'=>70
        ]);

        Product::create([
            'categories_id'=>4,
            'NombreProducto'=>'Café turco',
            'precio'=>60
        ]);

        Product::create([
            'categories_id'=>4,
            'NombreProducto'=>'Café flambeado',
            'precio'=>55
        ]);
        //factory(Product::class, 100)->create();
    }
}
