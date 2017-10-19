<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sensor extends Model
{
    //
    public function medidas()
        {
            return $this->hasMany('App\medida');
        }
    public function pertenece()
    {
        return $this->belongsTo('App\User');
    }
}
