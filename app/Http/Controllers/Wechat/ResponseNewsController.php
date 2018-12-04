<?php

namespace App\Http\Controllers\Wechat;

use App\Models\ResponseNews;
use App\services\WeChatService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class ResponseNewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$results=ResponseNews::all();

    	return view ('wechat.response_news.index',compact ('results'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(WeChatService $weChatService)
    {
    	$ruleview=$weChatService->ruleView ();

        return view ('wechat.response_news.create',compact ('ruleview'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,WeChatService $weChatService)
    {
	    DB::beginTransaction();
	    //dd($request->data);
	    $rule = $weChatService->ruleStore('news');
	    //添加回复内容
	    ResponseNews::create([
	    'data'=>$request['data'],
	    'rule_id'=>$rule['id'],
	    ]);
	    //事务提交
	    DB::commit();
	    return redirect()->route('wechat.response_news.index')->with('success','操作成功');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ResponseNews  $responseNews
     * @return \Illuminate\Http\Response
     */
    public function show(ResponseNews $responseNews)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ResponseNews  $responseNews
     * @return \Illuminate\Http\Response
     */
    public function edit(ResponseNews $responseNews,WeChatService $weChatService)
    {
//	    dd ($responseNews);
	    $ruleView = $weChatService->ruleView($responseNews['rule_id']);
	    return view('wechat.response_news.edit',compact('ruleView','responseNews'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ResponseNews  $responseNews
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ResponseNews $responseNews, WeChatService $weChatService)
    {
//        dd ($request->all ());
	    DB::beginTransaction();
//        dd($responseText);
	    //更新规则表和关键词表
	    $weChatService->ruleUpdate($responseNews['rule_id']);
	    //更新回复表
	    $responseNews->update([
	    'data'=>$request['data'],
	    'rule_id'=>$responseNews['rule_id'],
	    ]);
	    //事务提交
	    DB::commit();
	    return redirect()->route('wechat.response_news.index')->with('success','操作成功');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ResponseNews  $responseNews
     * @return \Illuminate\Http\Response
     */
    public function destroy(ResponseNews $responseNews)
    {
	    $responseNews->rule()->delete();
	    return redirect()->route('wechat.response_news.index')->with('success','操作成功');
    }
}
