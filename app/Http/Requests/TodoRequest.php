<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TodoRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|min:2|max:100',
            'qty' => 'required|numeric|integer|min:0',
            'price' => 'required|numeric|decimal:2|min:0',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Le nom est obligatoire',
            'name.min' => 'Le nom doit faire au moins 2 caractères',
            'name.max' => ' Le nom doit faire au plus 100 caractère',
            'qty.required' => 'La quantité est obligatoire',
            'qty.min' => 'La quantité doit être positive',
            'qty.numeric' => 'La quantité doit être un nombre',
            'qty.integer' => 'La quantité doit être un entier',
            'price.required' => 'Le prix est obligatoire',
            'price.min' => 'Le prix doit être un nombre',
            'price.numeric' => 'Le prix doit être un nombre',
            'price.decimal' => 'Le prix doit être un décimal avec 2 chiffres après la virgule',
        ];
    }
}
