<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KhachHangRequest extends FormRequest
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
            'ten_khach_hang' => 'required|string',
            'dia_chi' => 'required|max:50',
            'sdt' => 'required|numeric',
            'email' => 'required|email|unique:khach_hang,email',
        ];
    }
    public function messages()
    {
        return [
            'ten_khach_hang.required' => 'Tên khách hàng bị trống',
            'ten_khach_hang.string'   => 'Tên khách hàng chỉ là chữ',

            'dia_chi.required' => 'Địa chỉ bị trống',
            'dia_chi.max' => 'Địa chỉ không quá 50 ký tự',

            'sdt.required'=> 'Sdt bị trống',
            'sdt.max'     => 'Sdt tối đa chỉ 10 ký tự ',
            'sdt.numeric' => 'Sdt không hợp lệ',

            'email.required' => 'Email bị bỏ trống',
            'email.email' => 'Email không hợp lệ',
            'email.unique' => 'Email đã tồn tại',
        ];
    }
}
