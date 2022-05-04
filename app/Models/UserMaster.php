<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserMaster extends Model
{
    protected $table='user_masters';  
	protected $fillable=['uname','uemail','upassword','ucontact','utype'];

    public function inwardregister() 
	{
    return $this->hasMany('App\Models\InwardRegister');
	}

    public function outwardregister() 
	{
    return $this->hasMany('App\Models\OutwardRegister');
	}
}
