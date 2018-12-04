<?php

namespace App\Http\Controllers\WeChat;

use App\Models\Keyword;
use App\Models\ResponseBase;
use App\services\WeChatService;
use Houdunwang\WeChat\WeChat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApiController extends Controller
{
	public function handler ( WeChatService $weChatService)
	{
		$instance =WeChat::instance('message');
		file_put_contents ('ac.php',$instance->isTextMsg());

		if ($instance->isSubscribeEvent())
		{
			$content = ResponseBase::find(1);
			//向用户回复消息
			return $instance->text($content['data']['subscribe']);
		}
		if ($instance->isTextMsg())
		{


			//向用户回复消息
			//return $instance->text('后盾人收到你的消息了...:' . $instance->Content);
			//获取粉丝发送来的消息内容
			$content = $instance->Content;
			//根据消息内容去关键词表查找数据
			return $this->keyWordToFindResponse($instance,$content);
		}
		$buttonInstance = WeChat::instance('button');
		//点击菜单拉取消息时的事件推送
		if ($buttonInstance->isClickEvent()) {
			//获取消息内容
			$message = $buttonInstance->getMessage();
			return $this->keyWordToFindResponse($instance,$message->EventKey);
			//向用户回复消息
//            return WeChat::instance('message')->text("点击了菜单,EventKey:{$message->EventKey}");
		}


	}
	private function keyWordToFindResponse($instance,$content){
		if($keyword = Keyword::where('key',$content)->first()){
			//通过关键词模型关联 rule
			$rule = $keyword->rule;
			//file_put_contents('abc.php',$rule['type']);
			//如果能找到对应的关键词
			if($rule['type'] =='text'){
				//文本消息
				//获取所有对应的文本回复
				$responseContent = json_decode($rule->responseText->pluck('content')->toArray()[0],true);
				//从所有回复内容中每次随机一个
				$content = array_random($responseContent)['content'];
				//回复粉丝
				return $instance->text($content);
			}elseif ($rule['type'] =='news'){
				//图文消息
				$news = json_decode($rule->responseNews->toArray()[0]['data'],true);
				return $instance->news([$news]);
			}
		}

		//当匹配不到关键词的时候 执行默认回复
		$content = ResponseBase::find(1);
		return $instance->text($content['data']['default']);
	}
}
