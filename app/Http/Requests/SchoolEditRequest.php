<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SchoolEditRequest extends FormRequest
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
            'name_school' => 'required | min:5',
            'address' => 'required | min:5',
            'postal_code' => 'required | numeric',
            'phone_school' => 'required | numeric',
            'type' => 'required',
            'director1' => 'required | min:5',
            'director2' => 'nullable | min:5',
            'first_time_school' => 'required',
            'sede' => 'required',
            'region_id' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'El nombre del colegio es requerido',
            'name.min' => 'Ingrese el nombre del colegio correctamente',
            'address.required' => 'La dirección del colegio es requerida',
            'address.min' => 'Ingrese una dirección correcta',
            'postal_code.required' => 'El código postal del colegio es requerido',
            'postal_code.min' => 'El código postal debe ser numérico',
            'phone_school.required' => 'El teléfono del colegio es requerido',
            'phone_school.min' => 'El teléfono debe ser numérico',
            'director1.required' => 'El el nombre del director es requerido',
            'director1.min' => 'Ingrese el nombre del director correctamente',
            'director2.min' => 'Ingrese el nombre del vice director correctamente',
            'first_time_school.required' => 'El campo Primera vez es requerido',
            'sede.required' => 'El campo Sede es requerido',
            'type.required' => 'El campo Tipo de gestión es requerido',
            'region_id.required' => 'La localidad es requerida',
        ];
    }
}
