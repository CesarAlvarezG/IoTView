<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sensor extends Model
{
    //
    protected $fillable = [
        'Nombre',
        'Tipo',
        'NVar',
        'Var',
        'NMensaje',
        'Mensaje',
        'sistema_id'
    ];

    protected $hidden = ['created_at','updated_at','sistema_id'];


    public function medidas()
        {
            return $this->hasMany('App\medida');
        }
    public function pids()
        {
            return $this->hasMany('App\pid');
        }

    public function sistema()
    {
        return $this->belongsTo('App\sistema');
    }
}
