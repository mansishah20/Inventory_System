<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemMaster extends Model
{
    protected $table='item_masters';  
	protected $fillable=['catid','iname','currentstock','minstock','image','mrp'];


public function categorymaster() 
	{
		return $this->belongsTo('App\Models\CategoryMaster');
	}

public function inwardregister() 
	{
    return $this->hasMany('App\Models\InwardRegister');
	}
}