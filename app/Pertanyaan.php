<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pertanyaan extends Model
{
    protected $primaryKey = 'id_Pertanyaan';
    protected $table = 'pertanyaan';
    protected $fillable = [
        'id_Pertanyaan',
        'id_SubStandar',
        'pertanyaan',
        'standar_Nilai',
        'status',
    ];

    public function substandar()
    {
        return $this->belongsTo('App\SubStandar','id_SubStandar');
    }
}
