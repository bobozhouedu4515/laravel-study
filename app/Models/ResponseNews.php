<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ResponseNews extends Model
{
    protected $fillable=[
    'rule_id','data'
    ];

	public function rule ()
	{
		return $this -> belongsTo (Rule::class);
	}
}
