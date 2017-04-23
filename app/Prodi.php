<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
protected $primaryKey = 'id_ProgramStudi';
protected $table = 'program_studi';
protected $fillable = [
    'id_Fakultas',
    'id_Jurusan',
    'id_ProgramStudi',
    'nama_ProgramStudi',
];
class Prodi extends Model
{


    public function jurusan()
    {
        return $this->belongsTo('App\Jurusan', 'id_Jurusan');
    }

    public function fakultas()
    {
        return $this->belongsTo('App\Fakultas','id_Fakultas');
    }

}

