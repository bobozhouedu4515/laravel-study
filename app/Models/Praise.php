<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Praise extends Model
{
	protected $fillable=[
	'user_id'
	];
	public function user ()
	{
		return	$this -> belongsTo (User::class);
	}


	public function belongsModel ()
	{
		return $this->morphTo('praise');
	}
}
