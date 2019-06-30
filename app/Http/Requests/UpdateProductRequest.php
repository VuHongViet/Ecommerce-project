<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
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
            'name'=>'required|min:2|max:255|unique:products,name,'.$this->id,
            'quantity'=>'required',
            'price'=>'required|numeric',
            'promotional'=>'required|numeric',
            'image'=>'image|mimes:jpg,png,jpeg,gif|max:1048576',
            'product_details.*'=>'image|mimes:jpg,png,jpeg,gif|max:1048576',
            'description'=>'required',
            'information'=>'required',
            'color'=>'required',
        ];
    }
    public function messages(){
        return [
            'required'=>':attribute không được để trống',
            'min'=>':attribute tối thiểu phải có 2 kí tự',
            'max'=>':attribute tối đa 255 kí tự',
            'name.unique'=>':attribute đã tồn tại',
            'numeric'=>':attribute phải là số',
            'image'=>':attribute có file không phải là hình ảnh',
            'mimes'=>':attribute có file không phải là một tệp loại: jpg, png, jpeg, gif',
            'uploaded'=>':attribute có file không phải là hình ảnh',
        ];
    }
    public function attributes(){
        return[
            'name'=>'Tên sản phẩm',
            'quantity'=>'Số Lượng',
            'price'=>'Giá',
            'promotional'=>'Giá Khuyến Mãi',
            'image'=>'Ảnh',
            'description'=>'Mô tả sản phẩm',
            'information'=>'Thông tin chung',
            'product_details'=> 'Chi tiết ảnh',
            'color'=>'Màu',
            'product_details.*'=>'Chi tiết ảnh'
        ];
    }
}
