<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
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
            'name'=>'required',
            'email'=>'required|email',
            'address'=>'required',
            'phone'=>'required',
        ];
    }
    public function messages()
    {
        return [
            'required'=>':attribute không được để trống',
            'email'=>':attribute nhập vào không đúng địa chỉ email',
        ];
    }
    public function attributes()
    {
        return [
            'name'=>'Họ tên',
            'email'=>'Email',
            'address'=>'Địa chỉ',
            'phone'=>'Số Điện Thoại',
        ];
    }
}
