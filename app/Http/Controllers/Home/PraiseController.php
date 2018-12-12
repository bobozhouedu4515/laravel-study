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
		if ($request->query ('type')){
            $type = $request -> query ('type');
            $id = $request -> query ('id');
            $model = 'App\Models\\' . ucfirst ($type);
            $class = $model ::find ($id);

            if ($is_praise = $class -> praise -> where ('user_id', auth () -> id ()) -> first ()) {
                $is_praise -> delete ();
            } else {
                $class -> praise () -> create ([ 'user_id' => auth () -> id () ]);
            }
            if ($request->ajax ()){
                $newclass = $model ::find ($id);
                return ['code'=>1,'message'=>'', 'num' => $newclass->praise->count(),
                ];
            }
            return back ();
        }
        return back ();

	}








}
