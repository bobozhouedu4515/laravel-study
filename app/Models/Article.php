<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{

	public function user ()
	{
		 return $this -> belongsTo (User::class);
	}

	public function category ()
	{
		 return $this -> belongsTo (Category::class);
	}

}
