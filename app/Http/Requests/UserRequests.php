<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequests extends FormRequest
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
           'user_name' => 'required|min:7|max:40|unique:tbl_useradmin',
           'user_email' => 'email|required|unique:tbl_useradmin',
           'password' => 'required',
           'user_phone' => 'required|numeric|unique:tbl_useradmin',
           'avatar' => 'required',
          
           'Conditions' => 'required',
        ];
    }
    public function messages()
    {
        return [
           'user_name.required' => 'Họ tên không được để trống',
           'user_name.min' => 'Tên quá ngắn',
           'user_name.max' => 'Tên quá dài',
           'user_name.unique' => 'Tên này đã được sử dụng',
           'user_email.required' => 'Email tên không được để trống',
           'user_email.email' => 'Email không đúng định dạng',
           'user_email.unique' => 'Email này đã được sử dụng',
           'password.required' => 'Bạn Cần nhập mật khẩu',
           'user_phone.required' => 'Số điện thoại ko đc để trống',
           'user_phone.numeric' => 'Số điện thoại ko đúng',
           'user_phone.unique' => 'Số điện thoại này đã được sử dụng',
           'avatar.required' => 'Bạn cần một ảnh đại diện',
          
        ];
    }
}
