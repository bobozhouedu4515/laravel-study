<?php

namespace App\Http\Controllers\Member;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Notifications\DatabaseNotification;

class NotifyController extends Controller
{

	public function index (User $user)
	{

//		dd ($user);
		$this -> authorize ('isMine', $user);
		$notifications = $user->notifications()->paginate(5);
//		dd ($notifications);


		return view ('member.notify.index',compact ('user','notifications'));
	}

	public function show (DatabaseNotification $notify)
	{
		//当前的通知消息
//	dd ($notify);
		//markAsRead会把消息中的readat中的null标记成当前的时间
		$notify->markAsRead();
//		dd ($notify);
		//然后让他指向评论的的锚链接!使用三方工具,直接滚动到锚点
		return redirect($notify['data']['link']);
	}










}
