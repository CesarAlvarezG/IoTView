<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pid extends Model
{
    //
    protected $fillable = [
        'Kp',
        'Ki',
        'kd',
        'sensor_id'
    ];

    public function sensor()
    {
        return $this->belongsTo ('App\sensor');
    }
}
