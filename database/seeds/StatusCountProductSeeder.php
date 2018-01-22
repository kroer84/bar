<?php

use Illuminate\Database\Seeder;
use App\StatusCountProduct;

class StatusCountProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        StatusCountProduct::create([
            'NombreEstado' => 'Por Confirmar'
        ]);

        StatusCountProduct::create([
            'NombreEstado' => 'confirmado'
        ]);

    }
}
