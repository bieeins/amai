<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{

    protected $fillable = [
        'id',
        'username',
        'password',
        'full_Name',
        'email',
        'id_ProgramStudi',
        'roles',
        'status',
        'keterangan'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function prodi()
    {
        return $this->belongsTo('App\Prodi','id_ProgramStudi');
    }

}
