<?php

namespace App\Http\Controllers\Edu;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
	public function index ()
	{
		return view ('edu.admin');
	}

}
