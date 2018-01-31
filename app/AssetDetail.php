<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AssetDetail extends Model
{
    protected $fillable = [
        'asset_id','user_id','room_id','year','no_po','no_bst','serial','sourcefund','description','price','condition','status','created_at','updated_at'
    ];
}
