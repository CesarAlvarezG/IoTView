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
        'Ts',
        'SetPoint',
        'sensor_id'
    ];

    public function sensor()
    {
        return $this->belongsTo ('App\sensor');
    }
}
