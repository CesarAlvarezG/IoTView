<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sistema extends Model
{
    //
    protected $fillable = [
                            'Nombre',
                            'Descripcion'
                        ];

    public function sensores()
        {
            return $this->hasMany('App\sensor');
        }
}
