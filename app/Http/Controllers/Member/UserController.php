<?php

	namespace App\Http\Controllers\Member;

	use App\Models\Article;
	use App\User;
	use Illuminate\Http\Request;
	use App\Http\Controllers\Controller;

	class UserController extends Controller
	{
		/**
		 * Display a listing of the resource.
		 *
		 * @return \Illuminate\Http\Response
		 */
		public function index ()
		{
			//
		}

		/**
		 * Show the form for creating a new resource.
		 *
		 * @return \Illuminate\Http\Response
		 */
		public function create ()
		{
			//
		}

		/**
		 * Store a newly created resource in storage.
		 *
		 * @param  \Illuminate\Http\Request $request
		 *
		 * @return \Illuminate\Http\Response
		 */
		public function store ( Request $request )
		{
			//
		}

		/**
		 * Display the specified resource.
		 *
		 * @param  \App\User $user
		 *
		 * @return \Illuminate\Http\Response
		 */
		public function show ( User $user )
		{
//	    dd ($user);
			$articles = Article ::latest () -> where ('user_id', $user -> id) -> paginate (5);

			return view ('member.user.show', compact ('user', 'articles'));
		}

		/**
		 * Show the form for editing the specified resource.
		 *
		 * @param  \App\User $user
		 *
		 * @return \Illuminate\Http\Response
		 */
		public function edit ( User $user, Request $request )
		{
			$this->authorize ('isMine',$user);
			$type = $request -> query ('type');
//	    dd ($type);
			return view ('member.user.edit_' . $type, compact ('user'));
		}

		/**
		 * Update the specified resource in storage.
		 *
		 * @param  \Illuminate\Http\Request $request
		 * @param  \App\User                $user
		 *
		 * @return \Illuminate\Http\Response
		 */
		public function update ( Request $request, User $user )
		{
			$this->authorize ('isMine',$user);
//	        dd ($request -> all ());
//			dd ($user);
//			$data使用是一个数组 不可以链式操作
			$data = $request -> all ();
//			dd ($data);
//			dd ($data );
			$this -> validate ($request, [
			'password' => 'sometimes|required|min:3|confirmed',
			'name' => 'sometimes|required'
			], [
			'password.required' => '请输入密码',
			'password.min:3' => '密码不符合要求',
			'password.confirmed' => '俩次输入的密码不一致',
			'name.required' => '请输入昵称'

			]);
			if ($request->password){
				$data ['password']  = bcrypt ($data ['password']);
			}

			$user -> update ($data);
			return back ()-> with ('success', '修改成功');

		}

		/**
		 * Remove the specified resource from storage.
		 *
		 * @param  \App\User $user
		 *
		 * @return \Illuminate\Http\Response
		 */
		public function destroy ( User $user, Request $request )
		{
//			dd ($request -> all ());
//			dd ($user);

		}
	}
