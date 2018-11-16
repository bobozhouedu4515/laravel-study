<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
	public function index ()
	{
		return view ('admin.index');
	}

	public function find ()
	{
		$users = \DB::table('users')->get();

	return view ('admin.members',compact ('users'));


	}

}
