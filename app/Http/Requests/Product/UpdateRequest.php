<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    /**
     * Определяет, авторизован ли пользователь.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Правила валидации.
     */
    public function rules(): array
    {
        return [
            'title' => 'required|string',
            'preview_image' => 'nullable|image', // Для обновления изображения
            'tags' => 'nullable|array',
            'tags.*' => 'integer|exists:tags,id', //звязок products tags з таблицею tags по tags_id з id
            'colors' => 'nullable|array',
            'colors.*' => 'integer|exists:colors,id',
        ];
    }
}
