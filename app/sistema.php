<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sistema extends Model
{
    //
    protected $fillable = [
                            'Nombre',
                            'Descripcion',
                            'NVar',
                            'Var',
                            'NMensaje',
                            'Mensaje'

    ];
     protected $hidden = ['created_at','updated_at'];
    public function sensors()
        {
            return $this->hasMany('App\sensor');
        }
}
