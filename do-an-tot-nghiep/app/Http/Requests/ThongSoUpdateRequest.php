<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ThongSoUpdateRequest extends FormRequest
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
            "ten_thong_so" => "required",
            "don_vi"      => "required"
        ];
    }
    public function messages()
    {
        return [
            "ten_thong_so.required"   => "Tên thông số không được bỏ trống",
        
            "don_vi.required"        => "Đơn vị không được để trống",
        ];
    }
}
