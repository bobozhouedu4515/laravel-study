<?php

namespace App\Http\Controllers\User;

use App\Http\Requests\RegisterRequest;
use App\Http\Requests\RestRequest;
use App\Http\Requests\UserRequest;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
	public function __construct ()
	{
		$this->middleware ('guest',[
		'only'=>['login','register']
		]);
	}

	public function register ()
	{
		return view ('user.register');
	}


	public function login ()
	{
		return view ('user.login');

	}
//接收登录的表单数据
	public function loginform (UserRequest $request)
	{
//		dd(1);
//		dd($request->all ());
//		dd ($request->email);
		$ifo=$request->only ('email','password');
//		dd ($request->only ('email','password'));
		if (\Auth::attempt ($ifo)){
			 return redirect ()->route ('home')->with ('success','登录成功');
		}
		return redirect ()->route ('login')->with ('danger','用户名或者密码错误');
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

	public function ligout ()
	{
			\Auth::logout ();
		return redirect ()->route ('login');
	}

	public function passwordreset ()
	{

	return view ('user.passwordreset');

	}

	public function reststore (RestRequest $request)
	{

//      dd ($request->all ());
		 $email=$request->email;
		 //email 第一个是 表中的字段  $email是表单提交的email,
		//从表单中找出email匹配的数据,然后修改他的密保 保存
	$user=User::where('email',$email)->first();
	//如果找不加返回null
	dd ($user);
		if ($user){
			//把提交过来的新密码
         $user->password=bcrypt ($request->password);
        $user->save();
        return redirect ()->route ('login')->with ('success','修改成功');

		}
		return redirect ()->route ('user.reset')->with ('danger','找不到用户');
//		echo $psw;
//		$user=User::firstOrNew(['email'=>$request->username]);
//		dd ($user);


	}





}
