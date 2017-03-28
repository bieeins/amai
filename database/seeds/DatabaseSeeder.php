<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('users')->insert([
            'username' => 'admin',
            'full_Name' => 'Administrator',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123123'),
            'roles' => 'superadmin',
            'status' => 'enable',
        ]);
    }
}
