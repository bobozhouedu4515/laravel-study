<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CatetoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$categories=Category::all ();
        return view ('admin.category.index',compact ('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


    	return view ('admin.category.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CatetoryRequest $request)
    {

        Category::create($request->all ());
        return redirect ()->route ('admin.category.index')->with ('success','添加成功');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
//    	echo $category->id;
	    return view ('admin.category.edit',compact ('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(CatetoryRequest $request, Category $category)
    {
//    	dd ($request->all ());
//	    dd ($category);
//	    $this->route('')
	    //$category是原数据 $request 是新的提交的数据
    	$category->update ($request->all ());
	    //dd ($category);
	    return redirect ()->route ('admin.category.index')->with ('success','修改成功');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
		$category->delete ();
		return redirect ()->route ('admin.category.index')->with ('success','删除成功');
    }
}
