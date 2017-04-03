<?php

use Illuminate\Database\Seeder;

class fakultas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fakultas')->insert([
            'nama_Fakultas' => 'Teknik',
        ]);
    }
}
