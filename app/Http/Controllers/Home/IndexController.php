<?php

namespace App\Http\Controllers\Home;

use App\Models\Article;
use App\Models\Comment;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Activitylog\Models\Activity;

class IndexController extends Controller
{
	public function index (User $user)
	{

		$activities = Activity::limit(3)->orderby('created_at','desc')->get();

		return view ('home.index',compact ('activities'));
	}

	public function search (Request $request,Article $article,User $user,Comment $comment)
	{

		$wd = $request->query('wd');
		$articles =$article->search($wd)->paginate(10);
//		dd ($articles->total ());
		if ($articles->total ()){
			return view ('home.search',compact ('articles'));
		}else{
			$comments=$comment->search($wd)->paginate(10);
			if ($comments->total()){
				return view ('home.comment',compact ('comments'));
			}else{
				$users=$user->search($wd)->paginate(10);
				if ($users->total ()){
					return view ('home.user',compact ('users'));
				}

			}

		}
		return view ('home.no');

	}

}
