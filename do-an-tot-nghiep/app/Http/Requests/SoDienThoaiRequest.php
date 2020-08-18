<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SoDienThoaiRequest extends FormRequest
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
            'sdt' => 'required|regex:/(0)[1-9]{1}[0-9]{8}/|size:10',
        ];
    }
    public function messages()
    {
        return [
            'sdt.regex' => 'Sdt không hợp lệ',
            'sdt.size' => 'Sdt là 10 số',
        ];
    }
}
