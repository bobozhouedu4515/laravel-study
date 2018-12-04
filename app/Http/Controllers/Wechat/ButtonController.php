<?php

namespace App\Http\Controllers\Wechat;

use App\Models\Button;
use App\services\WeChatService;
use Houdunwang\WeChat\WeChat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ButtonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$buttons=Button::latest()->paginate();
		return view ('wechat.button.index',compact ('buttons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
	    return view('wechat.button.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
	    Button::create($request->all());
	    return redirect()->route('wechat.button.index')->with('success','菜单添加成功');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Button  $button
     * @return \Illuminate\Http\Response
     */
    public function show(Button $button)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Button  $button
     * @return \Illuminate\Http\Response
     */
    public function edit(Button $button)
    {
	    return view('wechat.button.edit',compact('button'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Button  $button
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Button $button)
    {
	    $button->update($request->all());
	    return redirect()->route('wechat.button.index')->with('success','菜单编辑成功');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Button  $button
     * @return \Illuminate\Http\Response
     */
    public function destroy(Button $button)
    {
	    $button->delete();
	    return redirect()->route('wechat.button.index')->with('success','菜单删除成功');
    }

	public function push (Button $button,WeChatService $weChatService)
	{

		$menu = json_decode($button['data'],true);
		//wechat 类要求传递惨淡数据需要时数组
		$res = WeChat::instance('button')->create($menu);
		//dd($res);
		if($res['errcode'] == 0){
			//将当前菜单数据表 status 修改1,其余的改为0
			$button->update(['status'=>1]);
			Button::where('id','!=',$button->id)->update(['status'=>0]);
			return back()->with('success','菜单推送成功');
		}else{
			return back()->with('danger',$res['errmsg']);
		}


	}
}
