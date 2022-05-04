<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InwardRegister extends Model
{
    protected $table='inward_registers';  
	protected $fillable=['itemid','pid','uid','quantity','price','expiredate'];

    public function itemmaster() 
	{
		return $this->belongsTo('App\Models\ItemMaster');
	}

    public function usermaster() 
	{
		return $this->belongsTo('App\Models\UserMaster');
	}

    public function placemaster() 
	{
		return $this->belongsTo('App\Models\PlaceMaster');
	}

    public function outwardregister() 
	{
    return $this->hasMany('App\Models\OutwardRegister');
	}
}
