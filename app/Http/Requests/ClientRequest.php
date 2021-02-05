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
          'dni'         => ['required', 'numeric','digits:8', 'unique:clients,dni'],
          'name'        => ['required', 'string', 'max:80'],
          'surnames'    => ['required', 'string', 'max:120'],
          'mobile'      => ['nullable', 'numeric', 'digits:9'],
          'email'       => ['required', 'string', 'email','unique:clients,email'],
          'profile'     => ['string', 'nullable'],
          'commentary'  => ['string', 'nullable'],
        ];
    }
}
