<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ResponseText extends Model
{
	protected $fillable=['rule_id','content'];



	public function rule ()
	{
		return $this -> belongsTo (Rule::class);
	}

}
