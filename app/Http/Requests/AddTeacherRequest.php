<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddTeacherRequest extends FormRequest
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
            'name_teacher' => 'required | min:5',
            'dni_teacher' => 'required | min:5 | numeric',
            'space' => 'required',
            'level_teacher' => 'required',
            'other_school' => 'required',
            'phone_teacher' => 'required | numeric',
            'email_teacher' => 'required | min:5',
            'first_time_teacher' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'name_teacher.required' => 'El nombre y apellido del profesor es requerido',
            'name_teacher.min' => 'Ingrese el nombre y apellido del profesor correctamente',
            'dni_teacher.required' => 'El DNI del profesor es requerido',
            'dni_teacher.min' => 'Ingrese el DNI del profesor correctamente',
            'dni_teacher.numeric' => 'Ingrese el DNI del profesor correctamente',
            'space.required' => 'El espacio curricular del profesor es requerido',
            'level_teacher.required' => 'El nivel del profesor es requerido',
            'other_school.required' => 'El campo si participa en otro colegio es requerido',
            'email_school.required' => 'El email del profesor es requerido',
            'email_school.min' => 'Ingrese un email válido',
            'first_time_teacher.required' => 'El campo si participa por primera vez es requerido',
        ];
    }
}
