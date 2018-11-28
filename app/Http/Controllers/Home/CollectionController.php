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
		$id = $request -> query ('id');
		$model='App\Models\\'.$type;
		$class = $model ::find ($id);
//		dd ($class);
		if ($collection=$class->collection->where('user_id',auth ()->id ())->first()){
			$collection -> delete ();

		}else{
			$class -> collection() ->create([ 'user_id' => auth () -> id() ]);
		}

		return back ();

	}
}
