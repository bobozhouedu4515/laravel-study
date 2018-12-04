<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Keyword extends Model
{
    protected $fillable=['rule_id', 'key',
    ];

	public function rule ()
	{
		return $this -> belongsTo (Rule::class);
	}
}
