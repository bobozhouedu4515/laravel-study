<?php

namespace App\Http\Controllers\Home;

use App\Http\Requests\ArticleRequest;
use App\Models\Article;
use App\Models\Category;
use App\Policies\ArticlePolicy;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
public function __construct ()
{
	$this->middleware('auth',[
	'only'=>['create','update','destroy','store','edit']
	]

	);
}

	public function index()
    {
//    	dd (Article::all ()->toArray ());
	    $articles = Article ::latest()->paginate(10);
	    return view ('home.article.index',compact ('articles'));
    }


    public function create()
    {

//	    $users = User ::all ();
	    $categories = Category ::all ();
//	    dd ($users -> toArray ());
//	    dd ($categories -> toArray ());
	    return view ('home.article.create',compact ('categories'));
    }


    public function store(ArticleRequest $request, Article $article)
    {
//	   $article=Article::all ();
//	    dd ($request->title);
//	    dd ($article -> title);
//	   $article->title=$request->tille;
//	   $article->content=$request->content;
	    $article->title = $request->title;
//	    dd ($article -> title);
	    $article->category_id = $request->category_id;
//	    dd ($article->category_id);
//	    dd ($request ->all ());
	    $article->content = $request['content'];
	    $article->user_id = auth()->id();
	    $article->save();
	    return redirect () -> route ('homearticle.index') -> with ('success', '发表成功');
    }


    public function show(Article $article)
    {
//	    dd ($article);
	    return view ('home.article.show',compact ('article'));
    }


    public function edit(Article $article)
    {
	    $categories = Category ::all ();
			return view ('home.article.edit',compact ('article','categories'));
    }

    public function update(ArticleRequest $request,Article $article)
    {
//    	dump ($request);
//		dd($article);
	    $this -> authorize ('update', $article);
//	    dd ($request -> all ());
	    //更新的话应该是取出全数据表中的所有数据!但是这里数据并不是数据库中的所有字段,所有不能
//	    所以不能用update方法,只能逐个修改后然后执行保存;
//	    $article->update($request -> all ());
	    $article -> title = $request -> title;

	    $article -> category_id = $request -> category_id;
	    $article -> content = $request['content'];
	    $article->user_id=auth ()->id();
	    $article -> save ();
	    return redirect ()->route ('homearticle.index')->with ('success','修改成功');
    }


    public function destroy(Article $article)
    {
//	    dd ($article);
	    $this -> authorize ('delete',$article);
	    $article -> delete ();
	    return  back()-> with ('danger', '删除成功');

    }
}
