<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    protected $primaryKey = 'id_ProgramStudi';
    protected $table = 'program_studi';
    protected $fillable =[
        'id_Fakultas',
        'id_Jurusan',
        'id_ProgramStudi',
        'nama_ProgramStudi',
    ];

    public function jurusan(){
        return $this->hasOne('App\Jurusan','id_Jurusan');
    }
}

