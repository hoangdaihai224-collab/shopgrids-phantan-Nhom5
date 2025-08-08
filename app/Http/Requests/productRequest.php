<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class productRequest extends FormRequest
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
        // dd(request()->all());
        return [
           
            'pro_name'=>'required|max:150',
            'price' => 'required|numeric|min:1',
            'price_sale' => 'required|numeric|min:0|lt:price',
            'images' => 'required|mimes:jpg,jpeg,png,gif',
            'description' => 'required',
            'status' => 'required',
            'price'=>'required|min:1|numeric',
            'description'=>'required',
            'warehouse'=>'required',
            'cat_id'=>'required',
            'id_brands'=>'required',

        ];
    }
    public function messages()
    {
        return [
           
            'pro_name.max' => 'Tên sản phẩm  quá dài',
            'price.required' => 'Gía sp ko đc để trống',
            'price.min' => 'Gía sp ko thấp hơn 1',
            'price.numeric' => 'Gía sp phải là số',
            'price_sale.required' => 'Gía sale sp ko đc để trống',
            'price_sale.min' => 'Gía sale sp ko thấp hơn 0',
            'price_sale.numeric' => 'Gía sp phải là số',
            'price_sale.lt' => 'Gía sale sp phải < hơn giá ban đầu',
 
            'images.required' => 'Bạn cần chọn ảnh sản phẩm',
            'images.mimes' => 'ảnh ko đúng định dạng',
 
             'description.required' =>'description ko đc để trống',
             'warehouse.required'=>'bạn cần nhập só lượng kho',
             'cat_id.required'=>'sản phâm chưa chọn danh mục',
             'id_brands.required'=>'sản phẩm cần một thương hiệu',
             'status.required' => 'Vui long chọn status',
        ];
    }
}
