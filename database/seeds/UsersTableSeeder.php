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
		   
            'name' => 'Nazmuz Shakib',
            'email' => 'amit220@gmal.com',
            'password' => bcrypt('password'),
        ]);
    }
}
