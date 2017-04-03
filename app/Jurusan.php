<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    protected $primaryKey = 'id_Jurusan';
    protected $table = 'jurusan';
    protected $fillable = [
        'id_Fakultas',
        'id_Jurusan',
        'nama_Jurusan',
    ];

    public function fakultas()
    {
        return $this->belongsTo('App\Fakultas','id_Fakultas');
    }

}
