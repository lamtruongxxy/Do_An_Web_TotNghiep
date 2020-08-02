<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoaiSanPhamRequest extends FormRequest
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
            'ten_loai_sp' => 'required|max:50|unique:loai_san_pham,ten_loai_sp',
            'ghi_chu' =>'required'
        ];
    }
    public function messages()
    {
        return
        [
            'ten_loai_sp.required' => 'Tên loại sản phẩm bị trống',
            'ten_loai_sp.max' => 'Tên loại sản phẩm không được quá 50 ký tự',
            'ten_loai_sp.unique' => 'Tên loại sản phẩm đã tồn tại', 
            'ghi_chu.required' =>'Ghi chú bị trống'
        ];
    }
}
