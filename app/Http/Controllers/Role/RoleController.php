<?php

namespace App\Http\Controllers\Role;
use App\User;
use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$roles=Role::get();

        return view ('role.role.index',compact ('roles'));
    }


    public function create()
    {

	    return view ('role.role.create');
    }


    public function store(Request $request)
    {

	    Role ::create($request -> all ());
	    return redirect () -> route ('role.role.index') -> with ('success', '保存成功');
    }

    public function edit(Role $role)
    {

	    return view ('role.role.edit', compact ('role'));
    }


    public function update(Request $request, Role $role)
    {
	    $role->update($request -> all ());
	    return redirect () -> route ('role.role.index') -> with ('success', '修改成功');
    }


    public function destroy(Role $role)
    {

	    $role -> delete();
	    return redirect () -> route ('role.role.index') -> with ('success', '删除成功');
    }

	public function userList ()
	{
		$users=User::all ();

		return view ('role.role.userList', compact ('users'));

	}

	public function roleList (Role $role,User $user)
	{


		return view ('role.role.roleList');
	}
}
