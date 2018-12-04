<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
	protected $fillable = [
	'name', 'data'
	];
	protected $casts = [
	'data' => 'array'
	];
}
