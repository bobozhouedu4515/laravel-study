<?php

namespace App;

use App\Models\Attachment;
use App\Models\Collection;
use App\Models\Comment;
use App\Models\Praise;
use Illuminate\Notifications\DatabaseNotification;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Scout\Searchable;
use Spatie\Permission\Traits\HasRoles;
use Tymon\JWTAuth\Contracts\JWTSubject;
class User extends Authenticatable  implements JWTSubject
{
    use Notifiable;
	use Searchable;
	use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','email_verified_at','ico'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function getIcoAttribute ( $key )
    {
		//注意测试数据完成后及时注释掉 不然会影响后面的输出结果
	    //当检测到浏览器中有表内的谋个字段的时候运行如果$key有值就使用$key
	    //否者给后面的结果
    	return $key?:asset ('org/imgas/face.jpg');
    }

	public function attachment ()
	{
		return $this -> hasMany (Attachment::class);
	}

	public function fans ()
	{
		return $this -> belongsToMany (User::class, 'followers', 'user_id', 'followings_id');
	}

	public function followings ()
	{
		return $this -> belongsToMany (User::class, 'followers', 'followings_id', 'user_id');

	}

	public function collection ()
	{
		return $this -> hasMany (Collection::class);
	}

	public function commnet ()
	{
		return $this -> hasMany (Comment::class);
	}


	public function praise ()
	{
		 return $this -> hasMany (Praise::class);
	}
//按照自己的业务逻辑可以重写了通知方法
	public function notifications()
	{
		return $this->morphMany(DatabaseNotification::class, 'notifiable')->orderBy ('read_at','asc')->orderBy('created_at', 'desc');
	}
//获取将存储在JWT主题声明中的标识符. 接口方法的重新写入
//     * 就是⽤用户表主键 id *
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }
//返回⼀一个键值数组，其中包含要添加到JWT的任何⾃自定义声明. *
    public function getJWTCustomClaims()
    {
        return [];
    }

}
