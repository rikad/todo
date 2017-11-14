<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plant extends Model
{

    protected $fillable = [
            'name',
            'umur1',
            'umur2',
            'umur3',
            'umur4',
            'kc1',
            'kc2',
            'kc3',
            'kc4',
            'tmin',
            'tmax',
            'hmin',
            'hmax',
            'imin',
            'imax',
            'panenmin',
            'panenmax',
            'climate',
            'distancemin',
            'distancemax',
            'depthmin',
            'depthmax',
    ];

}
