<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()

    {
        //

        \App\Setting::create([

        	'site_name' => 'Laravel Blogs',

        	'contact_email' => 'contato@webapps.place',

        	'contact_number' => '+55 11 988286539',

        	'address' => 'Rua Caetano Pinto, 218, São Paulo - SP, Brasil'
        ]);
    }
}
