<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubStandar extends Model
{
    protected $primaryKey = 'id_SubStandar';
    protected $table = 'substandar';
    protected $fillable = [
        'id_SubStandar',
        'id_Standar',
        'subStandar',
        'bobot',
    ];
}
