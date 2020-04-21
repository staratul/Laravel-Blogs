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
        $user = App\User::create([
        	'name' => 'Atul Chauhan',
        	'email' => 'admin@gmail.com',
        	'password' => bcrypt('password'),
            'admin' => 1
        ]);

        App\Profile::create([
            'user_id' => $user->id,
            'avatar' => 'uploads/avatars/avatar.jpg',
            'about' => 'win32_get_last_control_message()win32_get_last_control_message()',
            'facebook' => 'facebook.com',
            'youtube' => 'youtube.com'
        ]);
    }
}
