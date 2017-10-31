<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LogPower extends Model
{
    protected $fillable = [
        'activeplant_id','water','created_at','updated_at'
    ];
}
