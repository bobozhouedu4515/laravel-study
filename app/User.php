<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','email_verified_at',
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
}
