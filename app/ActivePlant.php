<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ActivePlant extends Model
{

	protected $table = 'activeplants';

    protected $fillable = [
        'user_id','sensor_id','plant_id','name','tanaman', 'area', 'capground', 'city','created_at','updated_at'
    ];

    public function logPlants() {
    	return $this->hasMany('App\LogPlant','activeplant_id');
    }
}
