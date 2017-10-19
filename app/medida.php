<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class medida extends Model
{
    //
    public function pertenece()
    {
        return $this->belongsTo('App\sensor');
    }
}
