<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProducttypeRequest extends FormRequest
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
            'name'=>'required|min:2|max:255|unique:product_types,name,'.$this->id,
            'image'=>'image|mimes:jpg,jpeg,png,gif|max:1048576',
            'idCategory'=>'required',
        ];
    }
    public function messages(){
        return [
            'required'=>':attribute không được để trống',
            'min'=>':attribute tối thiểu phải có 2 kí tự',
            'max'=>':attribute tối đa 255 kí tự',
            'image'=>'Đây không phải là hình :attribute',
            'mimes'=>'Đây không phải là hình :attribute',
            'image.max'=>':atrribute tối đa không quá 1MB',
            'unique'=>':attribute đã tồn tại',
            'uploaded'=>'Đây không phải là hình :attribute',
        ];
    }
    public function attributes(){
        return[
            'name'=>'Tên loại sản phẩm',
            'image'=>'Ảnh',
            'idCategory'=>'Tên danh mục',
        ];
    }
}
