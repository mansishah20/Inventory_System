<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryMaster extends Model
{
    protected $table='category_masters';  
	protected $fillable=['catid','cname'];


public function itemmaster() 
	{
    return $this->hasMany('App\Models\ItemMaster');
	}


}