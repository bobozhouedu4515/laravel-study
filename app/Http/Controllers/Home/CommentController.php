<?php

namespace App\Http\Controllers\Home;

use App\Models\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request,Comment $comment)
    {
//	    dd ($request ->article_id);
//	    dd ($comment->get());
//	    dd ($comment->get());
//	    报错serve _error
//	    dd (Comment::all ());
//	    dd ($comment->get());
	    $comments=$comment->with('user')->where('article_id',$request->article_id)->get();
//	    dd ($comments);\
	    //在每个评论中追加一个字段! 并把它的赞的个数赋值给他;
	    //这样就保证了 分配到页面上的对象中每个中都有num可以读取!
	    foreach($comments as $comment){
		    $comment->num=$comment->praise->count ();
	    }

//	    dd ($comments);
	    return ['code'=>1,'message'=>'','comments'=>$comments];

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,Comment $comment)
    {
//	    dd ($request -> all ());
	    $comment->user_id=auth ()->id();
	    $comment->article_id=$request->article_id;
	    $comment->content=$request['content'];
	    $comment->save ();
//	    表单提交过来的数据保存到数据库中的一条数据!
//	    dd ($comment);
//	   $comments= $comment->with('user')->get ();
	    $comment = $comment -> with ('user') -> find ($comment ->id);
//	    获取当前评论的所有信息并包含了用户的所有信息!
//	   $arr=$comment->with('article')->get();
	    $comment->num=$comment->praise->count ();

//	    with关联以后 可以得到所有评论,并且每条评论中会包含发表评论的用户的所有信息
//	    dd ($comment->toArray ());
	    //返回一个code 和提示信息, 并把评论的信息包含在comment中,并且返回一个json数据格式
	    return ['code'=>1,'message'=>'发表成功','comment'=>$comment];


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function edit(Comment $comment)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $comment)
    {
        //
    }
}
