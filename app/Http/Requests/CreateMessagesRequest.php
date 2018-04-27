<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateMessagesRequest extends FormRequest
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
            'content' => ['required','max:140']
        ];
    }
    public function messages()
    {
        return [
          'content.required' => 'El valor es requerido',
          'content.max' => 'No mas de 140  caracteres'
        ];
    }
}
