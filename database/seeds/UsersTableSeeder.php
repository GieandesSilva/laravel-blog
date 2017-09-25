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
        //

        App\User::create([

        	'name' => 'Gieandes Silva',

        	'email' => 'contato@gieandessilva.com',

        	'password' => bcrypt('GIL14line29.')
        ]);
    }
}
