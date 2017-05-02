<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class amai extends Model
{
    protected $primaryKey = 'id_Amai';
    protected $table = 'amai';
    protected $fillable = [
        'id_A',
        'id_Jurusan',
        'id_ProgramStudi',
        'nama_ProgramStudi',
    ];

}
