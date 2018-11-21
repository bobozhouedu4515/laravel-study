<?php

namespace App\Exceptions;

use Exception;

class UploadException extends Exception
{
	public function render ()
	{
			//第一个403,表示抛出的是一个异常,200,表示把这个异常可以正常抛出去! 抛出异常 可以立即停止代码的运行!
		return response () -> json (['message'=>$this->getMessage (),'code'=>403],200);
	}
}
