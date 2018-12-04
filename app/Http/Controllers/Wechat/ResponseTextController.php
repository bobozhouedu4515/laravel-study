<?php

namespace App\Http\Controllers\Wechat;

use App\Models\ResponseText;
use App\services\WeChatService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class ResponseTextController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ResponseText $responseText)
    {
    	$results=$responseText->get();
//	    dd ($res);

        return view ('wechat.response_text.index',compact ('results'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(WeChatService $weChatService)
    {
    	$ruleview=$weChatService->ruleView ();


	    return view ('wechat.response_text.create',compact ('ruleview'));
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
    	$rule=$weChatService->ruleStore ('text');
//	    dd ($request ->all ());
	    ResponseText::create([
	    'content'=>$request['contents'],
		    'rule_id'=>$rule['id']

	    ]);
	    DB::commit ();
	    return back ()->with ('success','保存成功');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ResponseText  $responseText
     * @return \Illuminate\Http\Response
     */
    public function show(ResponseText $responseText)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ResponseText  $responseText
     * @return \Illuminate\Http\Response
     */
    public function edit(ResponseText $responseText,WeChatService $weChatService)
    {
//	    dd (request () -> all ());

	    $rule_id = $responseText[ 'id' ];
//	    dd ($rule_id);
	    $ruleView=$weChatService->ruleView ($rule_id);
//	    dd ($responseText);


        return view ('wechat.response_text.edit',compact ('ruleView','responseText'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ResponseText  $responseText
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ResponseText $responseText,WeChatService $weChatService)
    {
//	    dd ($request -> all ());
	    DB::beginTransaction();

	    $weChatService->ruleUpdate($responseText['rule_id']);
	    $responseText -> update ([
	    'content'=>$request['data'],
	    'rule_id'=>$responseText['rule_id'],
	    ]);
	    DB::commit ();
	    return redirect ()->route ('wechat.response_text.index') -> with ('success', '修改成功');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ResponseText  $responseText
     * @return \Illuminate\Http\Response
     */
    public function destroy(ResponseText $responseText)
    {
        $responseText->rule->delete ();
	    return back () -> with ('success', '删除成功');
    }
}
