<?php

namespace App\Http\Controllers\User;

use App\Http\Requests\RegisterRequest;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
	public function register ()
	{
		return view ('user.register');
	}


	public function login ()
	{
		return view ('user.login');



	}

	public function store (RegisterRequest $request )
	{
//		dd ($request->all ());
		$data=$request->all (  );
		$data['password']=bcrypt ($data['password']);
//		dd ($data);
		User ::create($data);
		return redirect()->route('login')->with('success','注册成功');

	}
}
