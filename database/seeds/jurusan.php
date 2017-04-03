<?php

use Illuminate\Database\Seeder;

class jurusan extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jurusan')->insert([
            'id_Fakultas' => 1,
            'nama_Jurusan' => 'Teknik Sipil',
        ]);
    }
}
