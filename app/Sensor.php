<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sensor extends Model
{
    protected $fillable = [
        'serial','password', 'type', 'is_available', 'is_used','created_at','updated_at'
    ];
}
