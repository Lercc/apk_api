<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VoucherRequest extends FormRequest
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
            'client_program_id'   => ['required','numeric'],
            'name'                => ['required','string', 'max:80'],
            'code'                => ['nullable','string', 'unique:vouchers,code'],
            'amount'              => ['required','numeric'],
            'image'               => ['required', 'mimes:jpeg,jpg,jpe,png,webp'],
            'state'               => ['required','string', 'max:10'],
            'description'         => ['nullable','string', 'max:200']
        ];
    }
}
