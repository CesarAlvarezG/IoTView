<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class medida extends Model
{
    //

    protected $fillable = [
        'valor'
    ];

    public function pertenece()
    {
        return $this->belongsTo('App\sensor');
    }
}
