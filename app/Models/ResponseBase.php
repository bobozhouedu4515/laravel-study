<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ResponseBase extends Model
{
    protected $fillable=['id','data'];
	protected $casts = [
	'data'=>'array'
	];
}
