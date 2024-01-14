<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddStudentRequest extends FormRequest
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
            'name_student' => 'required | min:5',
            'dni_student' => 'required | min:5 | numeric | unique:students,dni_student,' . $this->id,
            'birth_date' => 'required',
            'genre' => 'required',
            'phone_student' => 'required | min:5 | numeric',
            'email_student' => 'required | min:5',
            'classroom' => 'required',
            'level_student' => 'required',
            'first_time_student' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'name_student.required' => 'El nombre y apellido del estudiante es requerido',
            'name_student.min' => 'Ingrese el nombre y apellido del estudiante correctamente',
            'dni_student.required' => 'El DNI del estudiante es requerido',
            'dni_student.min' => 'Ingrese el DNI del estudiante correctamente',
            'dni_student.numeric' => 'Ingrese el DNI del estudiante correctamente',
            'dni_student.unique' => 'El DNI ingresado ya esta registrado con otro estudiente',
            'genre.required' => 'El género del estudiante es requerido',
            'phone_student.required' => 'El género del estudiante es requerido',
            'phone_student.min' => 'Ingrese el teléfono del estudiante correctamente',
            'phone_student.numeric' => 'Ingrese el teléfono del estudiante correctamente',
            'email_school.required' => 'El email del estudiante es requerido',
            'email_school.min' => 'Ingrese un email válido',
            'level_student.required' => 'El nivel del estudiante es requerido',
            'first_time_student.required' => 'El campo si participa por primera vez es requerido',
        ];
    }
}
