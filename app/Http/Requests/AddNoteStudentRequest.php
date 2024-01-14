<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddNoteStudentRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'first_note' => 'numeric',
            'second_note' => 'numeric',
        ];
    }
    public function messages()
    {
        return [
            'first_note.numeric' => 'Ingrese la nota correctamente',
            'second_note.numeric' => 'Ingrese la nota correctamente',
        ];
    }
}
