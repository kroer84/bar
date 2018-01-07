<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class)->create([
        	'name'=>'Jorge Nuñez',
            'username'=>'jjx51',
        	'rol'=>'admin',
        	'email'=>'jjx51@outlook.com',
        	'password'=>bcrypt('admin')
        ]);

        factory(App\User::class)->create([
            'name'=>'Miguel Jimenez',
            'username'=>'kroer17',
            'rol'=>'user',
            'email'=>'kroer17@gmail.com',
            'password'=>bcrypt('admin')
        ]);

        factory(App\User::class,2)->create();
    }
}
