<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
        return [

        'email'=>'email',
        'password'=>'required|min:3',

            //
        ];
    }
    public function messages ()
    {
	    return[
	    'email.email'       =>'请输入正确邮箱' ,
	    'password.required' =>'请输入密码' ,
	    'password.min'      =>'密码不得少于3位' ,
	    ];
    }
}
