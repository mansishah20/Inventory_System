<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OutwardRegister extends Model
{
    protected $table='outward_registers';  
	protected $fillable=['inwid','uid','quantity','expiredate','itemid'];

    public function inwardregister() 
	{
    return $this->belongsTo('App\Models\InwardRegister');
	}

    public function usermaster() 
	{
		return $this->belongsTo('App\Models\UserMaster');
	}
}

