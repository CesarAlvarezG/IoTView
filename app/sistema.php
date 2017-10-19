<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sistema extends Model
{
    //

    public function sensores()
        {
            return $this->hasMany('App\sensor');
        }
}
