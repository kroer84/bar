<?php

use Illuminate\Database\Seeder;
use App\StatusCount;

class StatusCountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        StatusCount::truncate();
        StatusCount::create([
            'NombreEstado' => 'En espera de pedido...'
        ]);

        StatusCount::create([
            'NombreEstado' => 'Cuenta Activa'
        ]);

        StatusCount::create([
            'NombreEstado' => 'Cuenta por cobrar...'
        ]);

        StatusCount::create([
            'NombreEstado' => 'En historial'
        ]);

    }
}
