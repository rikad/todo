<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = [
        'code','code2', 'name', 'description','user_id','created_at','updated_at'
    ];
}
