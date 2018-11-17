<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CatetoryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
//    	dd ($this->route ('category')->id);
//    	dd ($this-route
	    $id=($this->route ('category'))?($this->route ('category')->id):null;



		    return [
		    'title' => 'required|unique:categories,title,' . $id,
		    'icon' => 'required'
		    ];

    }
    public function messages ()
    {
	    return [
	        'title.required'=>'请填写标题',
		    'title.unique'=>'标题已经存在',
		    'icon.required'=>'请选择图标'
	    ];
    }
}
