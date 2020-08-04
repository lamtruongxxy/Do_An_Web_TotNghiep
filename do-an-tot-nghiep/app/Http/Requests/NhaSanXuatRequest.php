<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NhaSanXuatRequest extends FormRequest
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
            'ten_nha_sx' => 'required|unique:nha_san_xuat,ten_nha_sx',
            'ghi_chu' => 'required'
        ];
    }
    public function messages()
    {
        return
            [
                'ten_nha_sx.required' => 'Tên nhà sản xuất không được bỏ trống',
                'ten_nha_sx.unique'  => 'Tên nhà sản xuất đã tồn tại',

                'ghi_chu.required' => 'Ghi chú không được bỏ trống'
            ];
    }
}
