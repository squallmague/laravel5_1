<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('users')->truncate();
    	
    	factory(App\User::class)->create([
        	'name'	=>	'ibrahim',
            'username' => 'squall',
        	'email'	=>	'ibrahimzerpa@gmail.com',
        	'role'	=>	'admin',
        	'magic_words' => bcrypt('admin'),
            'active' => true
        ]);
        factory(App\User::class, 49)->create();
    }
}
