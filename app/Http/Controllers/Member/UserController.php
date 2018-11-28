<?php

	namespace App\Http\Controllers\Member;

	use App\Models\Article;
	use App\Models\Collection;
	use App\Models\Praise;
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
			$articles = Article ::latest () -> where ('user_id', $user -> id) -> paginate (3);

			return view ('member.user.show', compact ('user', 'articles'));
		}


		public function edit ( User $user, Request $request )
		{
//			dd ($user);
			$this->authorize ('isMine',$user);
			$type = $request -> query ('type');
//			$fans = $user -> fans () -> paginate (5);
//			$followings = $user -> followings () -> paginate (5);



			return view ('member.user.edit_' . $type, compact ('user', 'fans', 'followings'));
		}


		public function update ( Request $request, User $user )
		{
			$this -> authorize ('isMine', $user);
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
			if ($request -> password) {
				$data [ 'password' ] = bcrypt ($data [ 'password' ]);
			}

			$user -> update ($data);
			return back () -> with ('success', '修改成功');

		}


		public function attention ( User $user )
		{
			//关注功能,原理就是使用中间表来建立user之间的关系,关注以后 就在中间表中写入
			//对应的id
			$user -> fans () -> toggle (auth () -> user ());
			return back ();
		}

		public function fans (User $user)
		{
			$fans = $user -> fans () -> paginate (3);

			return view ('member.user.edit_fans', compact ('fans','user'));
		}

		public function followings (User $user)
		{
			$followings = $user -> followings () -> paginate (3);
			return view ('member.user.edit_followings', compact ('followings','user'));

		}

		public function article_collection (Request $request,User $user)
		{

			$type = $request -> query ('type');
//			dd ($id);
//			dd ($type);
			$class='App\Models\\'.ucfirst ($type);
//			dd ($user->collection );
			$collections=$user->collection->where('collection_type',$class)->all();
//			dd ($collections);
			return view ('member.user.'.$type.'_collection',compact ('user','collections'));
		}

		function myPraise (Request $request,User $user,Praise $praise)
		{
			$type = $request -> query ('type');
//			dd ($type);
			$class='App\Models\\'.ucfirst ($type);
//			dd ($class);
//			dd ($user->praise);
//			$newPraise=[];
			$praises=$user->praise->where('praise_type',$class)->all();
//			dd ($praises);
//			foreach($praises as $praise){
//				dump ($praise->belongsModel);
//			}
//			die;
			return view ('member.user.praise_'.$type,compact ('user','praises'));


		}


	}
