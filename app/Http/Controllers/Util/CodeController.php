<?php

namespace App\Http\Controllers\Util;

use App\Notifications\RegisterNotify;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CodeController extends Controller
{

	public function send (Request $request)
	{
//		dd ($request -> all ());
		$code=$this->random ();
//		dd ($code);
		$user=User::firstOrNew(['email'=>$request->username]);
//		dd ($user);
		$user->notify(new RegisterNotify($code));
//		echo $code;
		session()->put ('code',$code);
		return ['code' => 1, 'message' => '验证码发送成功'];

	}



	private function random( $len=4 )
	{
		$str = '';
		for($i=0;$i<$len;$i++){
			$str .= mt_rand(0,9);
		}
		return $str;
	}

}
