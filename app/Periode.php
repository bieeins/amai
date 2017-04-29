<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class periode extends Model
{
    protected $primaryKey = 'id_Periode';
    protected $table = 'periode';
    protected $fillable = [
        'id_Periode',
        'nama_Periode',
        'awal_Periode',
        'akhir_Periode',
        'status_Periode',
    ];
}
