<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
class CategoryRequest extends FormRequest
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
    public function rules( Request $request )
            
    {
       
        return [
            
           'cat_name' => 'required|unique:tbl_category,cat_name,'.$this->id,
           'typecat' => 'required',
           'status' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'cat_name.required'=>'Bạn chưa nhập danh mục',
            'cat_name.unique'=>'Danh mục đã Tồn tại',
           'status.required' => 'Vui long chọn status',
           'typecat.required' => 'Vui long chọn loại danh mục',
        ];
      
    }
}
