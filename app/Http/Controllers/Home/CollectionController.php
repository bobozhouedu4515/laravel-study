<?php

namespace App\Http\Controllers\Home;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CollectionController extends Controller
{
	public function make (Request $request,User $user)
	{
//		dd ($user);
		$type = $request -> query ('type');
//		dd ($type);
		$id = $request -> query ('id');
//		dd ($id);
		$model='App\Models\\'.ucfirst ($type);
		$class = $model ::find ($id);

		if ($collection=$class->collection->where('user_id',auth ()->id ())->first()){
			$collection -> delete ();

		}else{
			$class -> collection() ->create([ 'user_id' => auth () -> id() ]);
		}

		return back ();

	}
}
