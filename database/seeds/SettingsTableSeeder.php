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
        App\Setting::create([
        	'site_name' => "Laravel's Blog",
        	'address' => 'Delhi 110093, Harsh Vihar',
        	'contact_number' => '110-2933438',
        	'contact_email' => 'infolaravel_blog@gmail.com '
        ]);
    }
}
