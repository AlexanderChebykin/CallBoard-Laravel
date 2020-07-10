<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rubric extends Model
{
	protected $table = 'rubrics';
	public $timestamps = false;
	
	protected $guarded = [];
	
	public function adverts()
	{
		return $this->hasMany('App\Advert');
	}
}
