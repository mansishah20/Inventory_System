<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlaceMaster extends Model
{
    protected $table='place_masters';  
	protected $fillable=['landmark','location','contact'];

    public function inwardregister() 
	{
    return $this->hasMany('App\Models\InwardRegister');
	}

}
