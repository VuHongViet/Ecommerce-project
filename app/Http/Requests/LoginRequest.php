<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'email'=>'required|email',
            'password'=>'required|min:6|max:255'
        ];
    }
    public function messages()
    {
        return [
            'required'=>':attribute không được để trống',
            'email'=>':attribute nhập vào không đúng địa chỉ email',
            'min'=>':attribute tối thiểu 6 kí tự',
            'max'=>':attribute tối đa 255 kí tự',
        ];
    }
    public function attributes()
    {
        return [
            'email'=>'Email',
            'password'=>'Mật khẩu'
        ];
    }
}
