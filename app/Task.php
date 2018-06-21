<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'name', 'desc','difficulty','user_id','status','deadline','created_at','updated_at'
    ];
}
