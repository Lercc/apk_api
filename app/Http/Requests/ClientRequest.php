<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
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
          'dni'         => ['required', 'string','digits:8', 'unique:clients,dni'],
          'name'        => ['required', 'string', 'max:80', 'regex:/^[\pL\s\-]+$/u'],
          'surnames'    => ['required', 'string', 'max:120', 'regex:/^[\pL\s\-]+$/u'],
          'mobile'      => ['nullable', 'string', 'digits:9'],
          'email'       => ['required', 'string', 'email','unique:clients,email'],
          'profile'     => ['string', 'nullable'],
          'commentary'  => ['string', 'nullable'],
        ];
    }
}
