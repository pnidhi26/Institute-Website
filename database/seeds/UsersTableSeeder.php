<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        User::create([
        	'email'=>'nihalgurjar007@gmail.com',
        	'password'=>Hash::make('password'),
        	'name'=>'John Doe',
        	
        	]);
        User::create([
        	'email'=>'baba@gmail.com',
        	'password'=>Hash::make('adminpass'),
        	'name'=>'Nanu Doe',
        	 	]);
        
    }
}
