<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SanPhamRequest extends FormRequest
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
            'ten_sp' => 'required',
            'gia_sp' => 'required|numeric|min:1',
            'gia_khuyen_mai' => 'required|numeric|min:0',
            'so_luong_ton_kho' => 'required|numeric|min:0',
            'che_do_bao_hanh' => 'required',
            'mo_ta_sp' => 'required',
           
        ];
    }
    public function messages()
    {
        return [
            'ten_sp.required' => 'Tên sản phẩm không được bỏ trống',

            'gia_sp.required' => 'Giá sản phẩm không được bỏ trống',
            'gia_sp.min' => 'Giá sản phẩm phải lớn hơn 0',

            'gia_khuyen_mai.required' => 'Giá khuyến mãi không được bỏ trống',
            'gia_khuyen_mai.min' => 'Giá sản phẩm phải là số dương',

            'so_luong_ton_kho.required' => 'Số lượng không được bỏ trống',
            'so_luong_ton_kho.min' => 'Số lượng phải là số dương',

            'che_do_bao_hanh.required' => 'Chế độ bảo hành không được bỏ trống',

            'mo_ta_sp.required' => 'Mô tả sản phẩm không được bỏ trống',

            
        ];
    }
}
