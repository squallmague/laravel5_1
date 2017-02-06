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
        	'email'	=>	'ibrahimzerpa@gmail.com',
        	'role'	=>	'admin',
        	'password'	=>	'admin'
        ]);
        factory(App\User::class, 49)->create();
    }
}
