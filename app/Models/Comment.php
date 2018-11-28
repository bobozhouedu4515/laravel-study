<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Laravel\Scout\Searchable;

class Comment extends Model
{
	use Searchable;
	use LogsActivity;
	protected $fillable = ['content'];

	//设置记录动态的属性
	protected static $logAttributes = ['content'];
	//如果需要记录所有$fillable设置的填充属性，可以使用
	protected static $logFillable = true;

	//模型情况下将包括：`created` `updated` `deleted`，可以设置模型属性`$recordEvents`来进行自定义
	//only the `deleted` event will get logged automatically
	protected static $recordEvents = ['created','updated','deleted'];

	//自定义日志名称
	protected static $logName = 'comment';
	public function user ()
	{
		return $this -> belongsTo (User::class);
	}

	public function praise ()
	{
		return $this -> morphMany (Praise::class,'praise');
	}

	public function collection ()
	{
		return $this->morphMany(Collection::class,'collection') ;
	}

	public function article ()
	{
		return $this -> belongsTo (Article::class);
	}

}
