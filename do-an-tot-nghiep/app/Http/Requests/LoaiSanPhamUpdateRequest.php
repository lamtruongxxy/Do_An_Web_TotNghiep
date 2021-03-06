<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoaiSanPhamUpdateRequest extends FormRequest
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
            'ten_loai_sp' => 'required|max:50',
            'ghi_chu' =>'required'
        ];
    }
    public function messages()
    {
        return
        [
            'ten_loai_sp.required' => 'Tên loại sản phẩm bị trống',
            'ten_loai_sp.max' => 'Tên loại sản phẩm không được quá 50 ký tự',
            'ghi_chu.required' =>'Ghi chú bị trống'
        ];
    }
}
