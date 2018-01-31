<?php

namespace App;

use Laratrust\LaratrustRole;

class Role extends LaratrustRole
{
    protected $fillable = [
        'display_name','name', 'description'
    ];
}
