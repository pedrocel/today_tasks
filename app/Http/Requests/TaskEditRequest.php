<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TaskEditRequest extends FormRequest
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
            'title' => 'required',
            'description' => 'required',
            'id_status' => 'required',
            'assigned_to' => 'required',
            'expected_date' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'O campo Titulo é obrigatório!',
            'title.description' => 'O campo Descrição é obrigatório!',
            'title.id_status' => 'O campo Status é obrigatório!',
            'title.assigned_to' => 'O campo Atribuido a é obrigatório!',
            'title.expected_date' => 'O campo data é obrigatório!',
        ];
    }
}
