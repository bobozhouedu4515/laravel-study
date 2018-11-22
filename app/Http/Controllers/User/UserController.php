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
			//调用guest中间件 对未登录的用户(游客)通过访问地址栏访问页面的权限作出限制
			//让他只能访问登录和注册页面   login 和register是方法??
			$this -> middleware ('guest', [
			'only' => [ 'login', 'register' ]
			]);
		}

		public function register ()
		{
			return view ('user.register');
		}


		public function login (Request $request)
		{
//			dd ($request->form);
			return view ('user.login');

		}

		//接收登录的表单数据
		public function loginform ( UserRequest $request )
		{
		//		dd(1);
		//		dd($request->all ());
		//		dd ($request->email);

//			dd ($request -> from );
				$ifo = $request -> only ('email', 'password');
				//		dd ($request->email);
				//读取remember的值 如果点了 返回值true 否则假
				$remember=$request->remember;
				//attemp中传第二个参数

				if (\Auth ::attempt ($ifo,$remember)) {
					if($request->from){
						return redirect ($request->from)  -> with ('success', '登录成功');
					}else{
						return redirect ()-> route('home') -> with ('success', '登录成功');
					}

				}

//			dd ($path);


			return redirect () -> route ('login') -> with ('danger', '用户名或者密码错误');
		}

		public function store ( RegisterRequest $request )
		{
				//dd ($request->all ());
			$data = $request -> all ();
			$data[ 'password' ] = bcrypt ($data[ 'password' ]);
			//		dd ($data);
			//create 线数据库中写入数据 区别 save是修改某条数据后执行保存
			User ::create ($data);
			return redirect () -> route ('login') -> with ('success', '注册成功');

		}

		public function ligout ()
		{
			\Auth ::logout ();
			return redirect () -> route ('home');
		}

		public function passwordreset ()
		{

			return view ('user.passwordreset');

		}

		public function reststore ( RestRequest $request )
		{

			//          dd ($request->all ());
			$email = $request -> email;
			//email 第一个是 表中的字段  $email是表单提交的email,
			//从表单中找出email匹配的数据,然后修改他的密保 保存
			$user = User ::where('email', $email)->first();
//			dd($user->toArray());
			//如果找不加返回null
//				        dd ($user->toArray());
			if ($user) {
				//把提交过来的新密码
				$user -> password = bcrypt ($request -> password);
				$user -> save ();
				return redirect () -> route ('login') -> with ('success', '修改成功');

			}
			return redirect () -> route ('user.reset') -> with ('danger', '找不到用户');
//		    echo $psw;
//		    $ user=User::firstOrNew(['email'=>$request->username]);
//		    dd ($user);


		}


	}
