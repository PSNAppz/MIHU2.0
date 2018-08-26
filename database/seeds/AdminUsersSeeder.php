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
        /** SAMPLE USERS FOR ADMIN DASHBOARD **/
        
        DB::table('users')->insert([
        	'name' => 'SuperAdmin',
        	'email' => 'superadmin@gmail.com',
        	'password' => bcrypt('123123'),
        ]);
    	DB::table('users')->insert([
        	'name' => 'Admin',
        	'email' => 'admin@gmail.com',
        	'password' => bcrypt('123123'),
        ]);
    }
}
