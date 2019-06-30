<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'name'=>'required|min:2|max:255',
            'email'=>'required|email|unique:users,email',
            'password'=>'required|min:6|max:255',
            'password_confirmation'=>'required|min:6|max:255|same:password',
        ];
    }
    public function messages(){
        return [
            'required'=>':attribute không được để trống',
            'name.min'=>':attribute tối thiểu 2 kí tự',
            'password.min'=>':attribute tối thiểu 6 kí tự',
            'password_confirmation.min'=>':attribute tối thiểu 6 kí tự',
            'max'=>':attribute tối đa 255 kí tự',
            'email'=>':attribute nhập vào không đúng địa chỉ email',
            'unique'=>':attribute đã tồn tại',
            'same'=>':attribute không khớp với mật khẩu'
        ];
    }
    public function attributes(){
        return [
            'name'=>'Họ và tên',
            'email'=>'Email',
            'password'=>'Mật khẩu',
            'password_confirmation'=>'Mật khẩu xác nhận',
        ];
    }
}
