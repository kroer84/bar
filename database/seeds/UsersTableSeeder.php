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
        	'name'=>'Mesero',
            'username'=>'mesero',
        	'rol'=>'mesero',
        	'email'=>'jorge@outlook.com',
        	'password'=>bcrypt('mesero')
        ]);

        factory(App\User::class)->create([
            'name'=>'Gerente',
            'username'=>'gerente',
            'rol'=>'gerente',
            'email'=>'jjx51@outlook.com',
            'password'=>bcrypt('gerente')
        ]);

        factory(App\User::class)->create([
            'name'=>'Administrador',
            'username'=>'admin',
            'rol'=>'admin',
            'email'=>'jjx51@outlook.com',
            'password'=>bcrypt('admin')
        ]);

        factory(App\User::class)->create([
            'name'=>'Miguel Jimenez',
            'username'=>'kroer17',
            'rol'=>'admin',
            'email'=>'kroer17@gmail.com',
            'password'=>bcrypt('admin')
        ]);

        factory(App\User::class,4)->create();
    }
}
