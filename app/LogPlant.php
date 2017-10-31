<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LogPlant extends Model
{
    protected $fillable = [
        'activeplant_id','temperature','humidity', 'itensity', 'ph', 'ec','vwind','rssi','created_at','updated_at'
    ];
}
