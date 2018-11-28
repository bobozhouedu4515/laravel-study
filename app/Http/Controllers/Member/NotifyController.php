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
		$notifications = $user->notifications;
//		dd ($notifications);


		return view ('member.notify.index',compact ('user','notifications'));
	}

	public function show (DatabaseNotification $notify)
	{
		$notify->markAsRead();
		return redirect($notify['data']['link']);
	}










}
