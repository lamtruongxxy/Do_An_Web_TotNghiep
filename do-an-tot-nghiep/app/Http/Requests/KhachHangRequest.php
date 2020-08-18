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
            'dia_chi' => 'required',
            'sdt' => 'required|regex:/(0)[1-9]{1}[0-9]{8}/|size:10',
            'email' => 'required|email|unique:khach_hang,email',
            'ghi_chu' =>'required'
        ];
    }
    public function messages()
    {
        return [
            'ten_khach_hang.required' => 'Tên khách hàng bị trống',
            'ten_khach_hang.string'   => 'Tên khách hàng chỉ là chữ',

            'dia_chi.required' => 'Địa chỉ bị trống',
    
            'sdt.required'=> 'Sdt bị trống',
            'sdt.regex' => 'Sdt không hợp lệ',
            'sdt.size' => 'Sdt là 10 số',

            'email.required' => 'Email bị bỏ trống',
            'email.email' => 'Email không hợp lệ',
            'email.unique' => 'Email đã tồn tại',

            'ghi_chu.required' =>' Ghi chú không được để trống'
        ];
    }
}
