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

        $this->call(fakultas::class);
        $this->call(jurusan::class);
        $this->call(prodi::class);
        $this->call(users::class);
    }
}
