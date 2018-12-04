<?php

namespace App\Http\Controllers\Util;

use App\Exceptions\UploadException;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UploadController extends Controller
{

//	public function __construct ()
//	{
//		$this->middleware('auth',[
//		'only'=>['uploader','filesLists' ,'checkSize','checkType']
//		]);
//	}

	public function uploader (Request $request)
	{
//		dd ($_FILES);
		//使用$_FILES 查看提交的文件的名字,这个取决去第三的插件使用的名字;
		//$request->file 获取提交的文件!
		$file = $request -> file ('file');
		$this -> isLogin ();
		$this -> checkSize ($file);
		$this -> checkType ($file);
//		dd ($file);$file是一个laravel的文件上传类

		if ($file||auth ()->check ()) {
			//第一个是attachment是存储的目录,第二是个配置项中filesystem中的的disk
			$path = $file -> store ('attachment', 'attachment');
			//为了保存上传过来的图片 我们创建了一个附件attachment模型,用他的数据表来存储
			//用户上传个的图片,并和user模型做了hasmany关联,这样就可以直接把该用户和表关联起来;方便获得
			//用户对应的头像列表;
//			dd ($path);attachment/ZmYSOCnNuxnZ1KP0085I7hd8IdE7ctYLfOCPko21.jpeg"
//			dd (url ($path));"http://mylaravel.edu/attachment/hPfeGl7I89NnKqCqtbnTHNw8dbIgfShtsy2yNWSF.jpeg"
//			dd (asset ($path));"http://mylaravel.edu/attachment/SizpzDUOuiTyFk80pjknXezb01bpBYXObbufBlmx.jpeg"
			auth () -> user () -> attachment () -> create ([
			//获取源文件的名字
			'name' => $file -> getClientOriginalName (),
			'path' => url ($path),
			]);
		}
		//插件要求返回文件的url路径 和一个状态码 并且是json格式的!
		return ['file'=>url($path),'code'=>0];
	}

	public function filesLists ()
	{
		//通过关联从attachment表中读取到当前用户的所有图片,并分页;
		if (auth ()->check ()) {
			$files = auth () -> user () -> attachment () -> paginate (5);
			//处理数据,处理成插件需要的数据格式
//		dd ($files);
			$data = [];
			foreach ($files as $file) {
				$data[] = [
				'url' => $file[ 'path' ],
				'path' => $file[ 'path' ],

				];
			}

			//返回当前数组和分页格式,并且返回一个code码!
			return [
			'data' => $data,
//			分页后面必须连接一个空的字符串 把一个对象转成字符传输!?
			'page' => $files -> links () . '',
			'code' => 0
			];
		}
	}

	public function checkSize ($file)
	{
		if ($file->getSize()>hd_config ('upload.size')){
//laravel带的抛出异常类,
			throw  new UploadException('图片太大了');
		}
	}

	public function checkType ($file)
	{
		$fileType=$file->getClientoriginalExtension();
//		dd ($fileType);
		if (!in_array (strtolower ($fileType),explode('|',hd_config('upload.type')))){
			throw new UploadException('图片格式不符合要求');
		}
	}

	public function isLogin ()
	{
//		dd (auth () -> check ());

		if (!auth ()->check ()){
			throw new UploadException('请先登陆后上传图片');
		}
	}

}
