<?php

namespace App\Models;
use Laravel\Scout\Searchable;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
class Article extends Model
{
	use Searchable;
	use LogsActivity;
	protected $fillable = ['title','user_id','category_id','content'];

	//设置记录动态的属性
	protected static $logAttributes = ['content','title','user_id'];
	//如果需要记录所有$fillable设置的填充属性，可以使用
	protected static $logFillable = true;

	//模型情况下将包括：`created` `updated` `deleted`，可以设置模型属性`$recordEvents`来进行自定义
	//only the `deleted` event will get logged automatically
	protected static $recordEvents = ['created','updated'];

	//自定义日志名称
	protected static $logName = 'article';

	public function user ()
	{
		 return $this -> belongsTo (User::class);
	}

	public function category ()
	{
		 return $this -> belongsTo (Category::class);
	}

	public function praise ()
	{
		return $this -> morphMany (Praise::class, 'praise');

	}

	public function collection ()
	{
		return $this -> morphMany(Collection::class, 'collection');
	}

	public function comment ()
	{
		return	$this->hasMany (Comment::class) ;
	}

	public function getLink ($param)
	{
		//$this 谁调用该方法 $this就指向谁! 这里就是当前文章的id
		return route ('homearticle.show',$this).$param;
	}

}
