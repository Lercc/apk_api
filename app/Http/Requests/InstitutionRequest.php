<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InstitutionRequest extends FormRequest
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
            'state'          => ['required','string'],
            'tipo'           => ['required', 'string'],
            'name'           => ['required', 'string', 'regex:/^[\pL\s\-]+$/u'],
            'description'    => ['nullable', 'string'],
        ];


        // $table->string('state',11)->default(Institution::DEFAULT_STATE); //activado desactivado
        // $table->string('tipo',11); //universidad instituto
        // $table->string('name',200);
        // $table->string('description',200)->nullable();


    }
}
