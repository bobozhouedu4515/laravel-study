<?php

namespace App\Http\Controllers\Wechat;

use App\Models\ResponseBase;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ResponseBaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {$field = ResponseBase::find(1);

	    return view('wechat.response_base.create',compact('field'));
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//	    dd ($request -> all ());
	    $responseBase = ResponseBase::firstOrNew(['id'=>1]);
	    $responseBase['data'] = $request->all();
	    $responseBase->save();
	    return back()->with('success','操作成功');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ResponseBase  $responseBase
     * @return \Illuminate\Http\Response
     */
    public function show(ResponseBase $responseBase)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ResponseBase  $responseBase
     * @return \Illuminate\Http\Response
     */
    public function edit(ResponseBase $responseBase)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ResponseBase  $responseBase
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ResponseBase $responseBase)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ResponseBase  $responseBase
     * @return \Illuminate\Http\Response
     */
    public function destroy(ResponseBase $responseBase)
    {
        //
    }
}
