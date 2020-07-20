<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DangNhapRequest extends FormRequest
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
            "ten_tai_khoan" => "required|exists:tai_khoan",
            "password"      => "required|min:6|max:20|alpha_num"
        ];
    }
    public function messages()
    {
        return [
            "ten_tai_khoan.required"   => "Tên tài khoản không được bỏ trống",
            "password.required"        => "Mật khẩu không được để trống",
            "ten_tai_khoan.exists"   => "Tên tài khoản không tồn tại",
            "password.min"  => "Mật khẩu tối thiểu 6 ký tự",
            "password.max"  => "Mật khẩu tối đa 20 ký tự",
            'password.alpha_num'     => "Mật khẩu chỉ là chữ và số"
        ];
    }
}
