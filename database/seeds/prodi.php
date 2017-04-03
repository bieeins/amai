<?php

use Illuminate\Database\Seeder;

class prodi extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $prodi = [
            ['id_ProgramStudi' => 1, 'id_Fakultas' => 1, 'id_Jurusan' =>1 , 'nama_ProgramStudi' => 'Teknik Sipil S1'],
            ['id_ProgramStudi' => 1, 'id_Fakultas' => 1, 'id_Jurusan' =>1 , 'nama_ProgramStudi' => 'Teknik Sipil D3']
        ];
        DB::table('program_studi')->insert($prodi);
    }
}
