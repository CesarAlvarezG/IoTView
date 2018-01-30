<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class medida extends Model
{
    //

    protected $fillable = [
        'valor','sensor_id'
    ];

    public function sensor()
    {
        return $this->belongsTo ('App\sensor');
    }
}
