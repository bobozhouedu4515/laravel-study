<?php
	namespace App\services;


use App\Models\Keyword;
use App\Models\Rule;
use Houdunwang\WeChat\WeChat;

class WeChatService
{
	public function __construct ()
	{
		$config=config ('hd_wechat');
//		dd ($config);
		WeChat ::config ($config);
		WeChat ::valid ();
	}


	public function ruleView ($rule_id=0)
	{
		$rule = Rule ::find ($rule_id);
		$ruleData=[
		'name'=>$rule?$rule['name']:'',
			'keywords'=>$rule?$rule->keyword()->select('key')->get()->toArray():[]
		];
//		dd ($ruleData);
//		dd ($rule_id);
//		$jsonData = json_encode ($ruleData,true);
//		dd ($jsonData);

		return view ('wechat.layouts.rule',compact ('ruleData'));
	}

	public function ruleStore ($type)
	{
//		dd ($type);
		$post = request () -> all ();
//		dd ($post);
//		dd ($post[ 'rule' ][ 'name' ]);
		$rule=json_decode ($post['rule'],true);
//		dd ($rule);
		$ruleModle=Rule::create([
		'name'=>$rule['name'],
			'type'=>$type
		]);
		foreach ($rule['keywords'] as $value){
			Keyword::create([
			'rule_id'=>$ruleModle['id'],
				'key'=>$value['key']
			]);

		}
			return $ruleModle;
	}

	public function ruleUpdate ($rule_id)
	{
		$rule = Rule::find($rule_id);
		$post = request()->all();
		$ruleData = json_decode($post['rule'],true);
		$rule->update(['name'=>$ruleData['name']]);
		//关键词表编辑
		//原来的关键词删除
		$rule->keyword()->delete();
		foreach ($ruleData['keywords'] as $value){
			Keyword::create([
			'rule_id'=>$rule_id,
			'key'=>$value['key']
			]);
		}
	}
}
