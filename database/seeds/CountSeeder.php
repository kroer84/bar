<?php

use Illuminate\Database\Seeder;
use App\Count;


class CountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
/*        
        Count::create([
            'user_id'=>2,
            'status_counts_id'=>1,
            'NombreCliente'=>'1° cliente'
        ]);

        Count::create([
            'user_id'=>2,
            'status_counts_id'=>2,
            'NombreCliente'=>'2° cliente'
        ]);

        Count::create([
            'user_id'=>2,
            'status_counts_id'=>3,
            'NombreCliente'=>'3° cliente'
        ]);

        Count::create([
            'user_id'=>2,
            'status_counts_id'=>4,
            'NombreCliente'=>'4° cliente'
        ]);
    */
        factory(Count::class, 100)->create();
    }
}
