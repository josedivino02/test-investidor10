<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreNewsRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            "title"             => "required|string|min:3|max:255",
            "content"           => "required|string|min:10",
            "category_id"          => "required",
            "date_published"    => "required|date",
        ];
    }

    public function messages(): array
    {
        return [
            "title.required"            => "O título da notícia é obrigatório",
            "title.min"                 => "O título da notícia deve ter pelo menos 3 caracteres",
            "title.max"                 => "O título da notícia não deve ter mais que 255 caracteres",
            "content.required"          => "O conteúdo da notícia é obrigatório",
            "content.min"               => "O conteúdo da notícia deve ter pelo menos 10 caracteres",
            "category_id.required"         => "A categoria da notícia é obrigatória",
            "date_published.required"   => "A data de publicação é obrigatória",
            "date_published.date"       => "A data de publicação deve ser do tipo data",
        ];
    }
}