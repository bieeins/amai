<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Standar extends Model
{
    protected $primaryKey = 'id_Standar';
    protected $table = 'standar';
    protected $fillable = [
        'id_Standar',
        'standar',
        'bobot',
    ];
}
