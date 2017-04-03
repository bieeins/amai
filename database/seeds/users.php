<?php

use Illuminate\Database\Seeder;

class users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            ['id_ProgramStudi' => 1, 'username' => 'admin', 'full_Name' => 'Administrator', 'email' => 'administrator@amai.com', 'password' => bcrypt('123123'), 'roles' => 'superadmin', 'status' => 'enable'],
            ['id_ProgramStudi' => 2, 'username' => 'users', 'full_Name' => 'Users Admin', 'email' => 'admin@amai.com', 'password' => bcrypt('123123'), 'roles' => 'admin', 'status' => 'enable'],
            ['id_ProgramStudi' => 1, 'username' => 'prodi', 'full_Name' => 'Program Studi', 'email' => 'prodi@amai.com', 'password' => bcrypt('123123'), 'roles' => 'prodi', 'status' => 'enable'],
            ['id_ProgramStudi' => 2, 'username' => 'reviewer', 'full_Name' => 'reviewer', 'email' => 'review@amai.com', 'password' => bcrypt('123123'), 'roles' => 'reviewer', 'status' => 'enable'],
            ['id_ProgramStudi' => 1, 'username' => 'tes', 'full_Name' => 'tes aja', 'email' => 'tes@amai.com', 'password' => bcrypt('123123'), 'roles' => 'reviewer', 'status' => 'enable'],
            ['id_ProgramStudi' => 2, 'username' => 'tess', 'full_Name' => 'tess aja', 'email' => 'tess@amai.com', 'password' => bcrypt('123123'), 'roles' => 'prodi', 'status' => 'enable'],
        ];
        DB::table('users')->insert($user);

//        DB::table('users')->insert([
//            'id_ProgramStudi' => 1,
//            'username' => 'admin',
//            'full_Name' => 'Administrator',
//            'email' => 'admin@gmail.com',
//            'password' => bcrypt('123123'),
//            'roles' => 'superadmin',
//            'status' => 'enable',
//        ]);
    }
}
