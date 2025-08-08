<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class mainRequest extends FormRequest
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
            
           'title' => 'required',
           'url' => 'required',
           'position'=>'required',
           'target'=>'required',
           'type'=>'required',
           'status'=>'required',
           'images'=>'required',
           'description'=> 'required',
        ];
    }
    public function messages()
    {
        return [
            'title.required'=>'Bạn chưa nhập title',
            'url.required'=>'Bạn chưa nhập url',
           'position.required' => 'Bạn chưa nhập vị trí banner',
           'target.required' => 'Bạn chưa nhập mục này',
           'type.required' => 'Bạn chưa nhập loại banner',
           'status.required' => 'Bạn chưa nhập trạng thái',
           'images.required' => 'Bạn chưa chọn ảnh',
           'description.required' => 'Bạn nhập mô tả',
        ];
      
    }
}
