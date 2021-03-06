<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        
        $this->call(StatusCountSeeder::class);
        $this->call(StatusCountProductSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(CountSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(CountProductSeeder::class);
    }
}
