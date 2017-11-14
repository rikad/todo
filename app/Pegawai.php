<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{

	protected $table = 'pegawai';

    protected $fillable = [
        'user_id','nip','name', 'birthdate', 'gender', 'address','phone','department','jabatan'
    ];
}
