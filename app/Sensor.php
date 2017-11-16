<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sensor extends Model
{
    protected $fillable = [
        'serial','password', 'type', 'user_id','created_at','updated_at'
    ];
}
