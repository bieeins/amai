<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class amai extends Model
{
    protected $primaryKey = 'id_Amai';
    protected $table = 'amai';
    protected $fillable = [
        'id_Amai',
        'id_Pertanyaan',
        'id_Periode',
        'id_UserInput',
        'id_UserReview',
        'nilai',
        'date_Input',
        'date_Nilai',
        'jawaban',
        'ket_Reviewer',
    ];

    public function pertanyaan()
    {
        return $this->belongsTo('App\Pertanyaan', 'id_Pertanyaan');
    }

    public function periode()
    {
        return $this->belongsTo('App\Periode', 'id_Periode');
    }

    public function userinput()
    {
        return $this->belongsTo('App\User', 'id');
    }

    public function userreview()
    {
        return $this->belongsTo('App\User', 'id');
    }

}

