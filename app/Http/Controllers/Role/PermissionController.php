<?php

namespace App\Http\Controllers\Role;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
	public function index ()
	{
		$permissions=Permission::all ();
		return view ('role.permission.index',compact ('permissions'));
	}

	public function showPermission ()
	{


		return view ('role.permission.setpermission');
	}


}
