<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TaiKhoanUpdateRequest extends FormRequest
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
            "ten_tai_khoan" => "required",
            "mat_khau"      => "required|min:6|max:20|alpha_num",
            "ho_ten" => "required",
            'email' => 'required|email',
            "sdt" => "required|numeric",
            "dia_chi" => "required"
        ];
    }
    public function messages()
    {
        return [
            "ten_tai_khoan.required"   => "Tên tài khoản không được bỏ trống",

            "mat_khau.required"        => "Mật khẩu không được để trống",
            "mat_khau.min"  => "Mật khẩu tối thiểu 6 ký tự",
            "mat_khau.max"  => "Mật khẩu tối đa 20 ký tự",
            'mat_khau.alpha_num'     => "Mật khẩu chỉ là chữ và số",

            "ho_ten.required"   => "Tên tài khoản không được bỏ trống",

            'email.required' => 'Email bị bỏ trống',
            'email.email' => 'Email không hợp lệ',
           
            "sdt.required"   => "Tên tài khoản không được bỏ trống",
            'sdt.numeric' => 'Sdt không hợp lệ',

            "dia_chi.required"   => "Tên tài khoản không được bỏ trống",

        ];
    }
}
