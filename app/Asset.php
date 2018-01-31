<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    protected $fillable = [
        'name','type','spesification','description','category','created_at','updated_at'
    ];
}
