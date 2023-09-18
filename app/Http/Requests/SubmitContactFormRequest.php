<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SubmitContactFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string',
            'email' => 'required|email:rfc',
            'title' => 'required|string',
            'message' => 'required|string'
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'name.required' => 'Vardo laukas yra privalomas.',
            'name.string' => 'Vardo lauke įvestis turi būti string',
            'email.required' => 'El. pašto adreso laukas yra privalomas.',
            'email.email' => 'El. pašto adreso lauke turi būti galiojantis el. pašto adresas.',
            'title.required' => 'Pavadinimo laukas yra privalomas.',
            'title.string' => 'Pavadinimo lauke įvestis turi būti string',
            'message.required' => 'Žinuties laukas yra privalomas.',
            // 'message.max' => 'Žinuties laukas negali būti ilgesnis nei 255 simboliai.'
        ];
    }
}
