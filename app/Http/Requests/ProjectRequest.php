<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectRequest extends FormRequest
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
            'description' => 'required|min:10|max:500|string',
            'url' => 'required|min:5|max:255|string',
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
            'name.required' => 'Le nom du projet est obligatoire',
            'name.string' => 'Le nom du projet doit être une chaine de caractères',
            'name.min' => 'Le nom du projet doit faire :min caratères minimum',
            'name.max' => 'Le nom du projet doit faire :max caratères maximum',
            'description.required' => 'La description du projet est obligatoire',
            'description.string' => 'La description du projet doit être une chaine de caractères',
            'description.min' => 'La description du projet doit faire :min caratères minimum',
            'description.max' => 'La description du projet doit faire :max caratères maximum',
            'url.required' => 'Le lien de la vidéo du projet est obligatoire',
            'url.string' => 'Le lien de la vidéo du projet doit être une chaine de caractères',
            'url.min' => 'Le lien de la vidéo du projet doit faire :min caratères minimum',
            'url.max' => 'Le lien de la vidéo du projet doit faire :max caratères maximum',
        ];
    }
}
