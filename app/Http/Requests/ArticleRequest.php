<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth ()->user ();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
        'title'=>'required',
        'category_id'=>'required',
        'content'=>'required'
        ];
    }
    public function messages ()
    {
	    return [
	    'title.required'=>'请输入文章标题',
	    'category_id.required'=>'请选择文章分类',
	    'content.required'=>'请输入文章内容',
	    ];
    }
}
