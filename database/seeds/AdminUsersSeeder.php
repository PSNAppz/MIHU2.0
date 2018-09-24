<?php

use Illuminate\Database\Seeder;

class AdminUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('users')->insert([
        	'name' => 'PSN',
        	'email' => 'thepsnarayanan@gmail.com',
        	'password' => '$2y$12$7CS9fi8jrZZDNPdUTf.meOB8Y9Nu1WDGZiQdxRAOoJ7AipOt2PU7S',
        ]);
    	DB::table('users')->insert([
        	'name' => 'Arjun',
        	'email' => 'admin1@gmail.com',
        	'password' => '$2y$12$1/apaEJ5CiAsJB5oMngrhuxJAdVq5LyoRF9eE7gfXQsl3PE7E.BtK', 
        ]);
        DB::table('users')->insert([
            'name' => 'Amit',
            'email' => 'admin2@gmail.com',
            'password' => '$2y$12$1/apaEJ5CiAsJB5oMngrhuxJAdVq5LyoRF9eE7gfXQsl3PE7E.BtK', 
        ]);
        DB::table('users')->insert([
            'name' => 'Sooraj',
            'email' => 'admin3@gmail.com',
            'password' => '$2y$12$1/apaEJ5CiAsJB5oMngrhuxJAdVq5LyoRF9eE7gfXQsl3PE7E.BtK', 
        ]);
    }
}

