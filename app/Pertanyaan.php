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
        return $this->belongsTo('App\SubStandar', 'id_SubStandar');
    }
//public function standar()
//    {
//        return $this->belongsTo('App\Standar', 'id_Standar');
//    }

    public function standar()
    {
//        return $this->hasManyThrough('App\Standar', 'App\SubStandar');
        return $this->hasManyThrough(
            'App\Standar', 'App\SubStandar',
            'id_Standar', 'id_SubStandar', 'id_SubStandar'
        );
    }
}
