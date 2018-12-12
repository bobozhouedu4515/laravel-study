<?php

namespace App\Http\Controllers\Role;

use App\Models\Module;
use Spatie\Permission\Models\Role;
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

	public function showPermission (Role $role)
	{
//		dd ($role);
		$modules=Module::all ();
//		dd ($modules);

		return view ('role.permission.setpermission',compact ('modules','role'));
	}

	public function showPermissionStore (Role $role)
	{
//		 (request ()->all ());
		$permissions=request ()->permission;
//		dd ($permissions);
		$role->syncPermissions($permissions);
		return redirect () -> route ('role.role.index') -> with ('success', '设置成功');


	}


}
