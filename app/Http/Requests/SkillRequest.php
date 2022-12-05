<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SkillRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // only allow updates if the user is logged in
        return backpack_auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|min:5|max:255|string',
            'per_cent' => 'required|numeric|min:0|max:100'
        ];
    }

    /**
     * Get the validation attributes that apply to the request.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            //
        ];
    }

    /**
     * Get the validation messages that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => 'Le nom de la compétence est obligatoire',
            'name.string' => 'Le nom de la compétence doit être une chaine de caractères',
            'name.min' => 'Le nom de la compétence doit faire :min caratères minimum',
            'name.max' => 'Le nom de la compétence doit faire :max caratères maximum',
            'per_cent.required' => 'Le poucentage de la compétence est obligatoire',
            'per_cent.numeric' => 'Le poucentage de la compétence doit être un nombre valide',
            'per_cent.min' => 'Le poucentage de la compétence doit être au minimum de :min %',
            'per_cent.max' => 'Le poucentage de la compétence doit être au maximum de :max %',
        ];
    }
}
