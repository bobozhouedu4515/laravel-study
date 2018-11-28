<?php

namespace App\Http\Controllers\Home;

use App\Models\Praise;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PraiseController extends Controller
{
	public function index ()
	{

	}



	public function make(Request $request,Praise $praise)
	{
//		dd (11);
		$type = $request -> query ('type');
		$id = $request -> query ('id');
//		dd ($type);
		$model = 'App\Models\\' . ucfirst ($type);
//		dd ($model);

		$class = $model ::find ($id);
//		dd ($class->praise);
		$is_praise = $class -> praise -> where ('user_id', auth () -> id ()) -> first ();
//		$is_praise=$class->praise->contains('user_id',auth ()->id ());
//		dd ($is_praise);
		if ($is_praise = $class -> praise -> where ('user_id', auth () -> id ()) -> first ()) {
			$is_praise -> delete ();
		} else {
			$class -> praise () -> create ([ 'user_id' => auth () -> id () ]);
//	return	$class -> praise () -> toggle (auth ()->user ());
		}
		if ($request->ajax ()){
//			$num= $class->praise->count();
			$newclass = $model ::find ($id);

			return ['code'=>1,'message'=>'', 'num' => $newclass->praise->count(),
			];
		}
		return back ();
	}








}
