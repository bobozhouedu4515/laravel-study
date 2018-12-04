<?php

namespace App\Http\Controllers\Admin;

use App\Models\Picture;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PictureController extends Controller
{

    public function index(Picture $picture,User $user)
    {

	    $pictures = $picture -> get ();
//	    dd ($pictures);
        return view ('admin.picture.index',compact ('pictures','user'));
    }


    public function create()
    {


    }


    public function store(Request $request,Picture $picture)
    {

	    $picture->path=$request->pic;
	    $picture -> save ();
	    return back () -> with ('success', '保存成功');


    }
    public function destroy(Picture $picture)
    {
	    $picture -> delete ();

	    return back () -> with ('success', '删除成功');

    }
}
