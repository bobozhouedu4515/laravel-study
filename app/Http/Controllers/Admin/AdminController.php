<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Permission;

class AdminController extends Controller
{
	public function index ()
	{

		return view ('admin.index');
	}

	public function find ()
	{
//		Permission::class
		$users = \DB::table('users')->get();

	return view ('admin.members',compact ('users'));


	}

}
