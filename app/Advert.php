<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Advert extends Model
{
	protected $table = 'adverts';
	public $timestamps = false;
	
	protected $guarded = [];
	
	public function rubric()
	{
		return $this->hasOne('App\Rubric');
	}
}
