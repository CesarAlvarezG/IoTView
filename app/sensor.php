<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sensor extends Model
{
    //
    protected $fillable = [
        'Nombre',
        'Tipo',
        'sistema_id'
    ];

    public function medidas()
        {
            return $this->hasMany('App\medida');
        }

    public function sistema()
    {
        return $this->belongsTo('App\sistema');
    }
}
