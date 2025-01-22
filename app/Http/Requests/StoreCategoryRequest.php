<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCategoryRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            "name"          => "required|string|min:3|max:255|unique:categories,name",
            "description"   => "required|string",
        ];
    }

    public function messages(): array
    {
        return [
            "name.required"         => "O nome da categoria é obrigatório",
            "name.min"              => "O nome da categoria deve ter pelo menos 3 caracteres",
            "name.max"              => "O nome da categoria não deve ter mais que 255 caracteres",
            "name.unique"           => "A categoria já foi cadastrada",
            "description.required"  => "A descrição da categoria é obrigatória",
        ];
    }
}