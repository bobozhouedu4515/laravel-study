<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{


	protected $fillable = [
	'user_id',

	];
	public function user ()
	{
		return $this -> belongsTo (User::class);
	}

	public function belongsModels ()
	{
		return $this -> morphTo('collection');
	}


}
