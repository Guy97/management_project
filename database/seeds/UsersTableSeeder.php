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
        App\User::insert([
            'name' => 'John Doe',
            'email' => 'john@doe.com',
            'type' => 0,
            'password' => bcrypt('stocazzo')
        ]);

        App\User::insert([
            'name' => 'Marcello Pajntar',
            'email' => 'tua@madre.com',
            'type' => 1,
            'password' => bcrypt('stovoiler')
        ]);

        App\User::insert([
            'name' => 'Hesu cristo',
            'email' => 'ehi@dude.com',
            'type' => 2,
            'password' => bcrypt('osteria')
        ]);

        App\User::insert([
            'name' => 'Bruno Pajntar',
            'email' => 'tua@madpoiure.com',
            'type' => 0,
            'password' => bcrypt('stovoilerdfghjk')
        ]);

        App\User::insert([
            'name' => 'Carlo Pajntar',
            'email' => 'tua@ooooomadre.com',
            'type' => 0,
            'password' => bcrypt('stovoilereeeee')
        ]);

        App\User::insert([
            'name' => 'Mattia Pajntar',
            'email' => 'tua@mahhhhhdre.com',
            'type' => 1,
            'password' => bcrypt('stovoilerlllll')
        ]);

        App\User::insert([
            'name' => 'Micaela Pajntar',
            'email' => 'tua@madregggg.com',
            'type' => 1,
            'password' => bcrypt('stovoilerkkkkkk')
        ]);
    }
}
