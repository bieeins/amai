<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fakultas extends Model
{
    protected $primaryKey = 'id_Fakultas';
    protected $table = 'fakultas';
    protected $fillable = [
        'id_Fakultas',
        'nama_Fakultas',
    ];
}
