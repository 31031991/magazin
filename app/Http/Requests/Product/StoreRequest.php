<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|string',
            'description' => 'required',
            'content' => 'required',
            'preview_image' => 'required',
            'price' => 'required',
            'count' => 'required',
            'old_price' => 'required',
            'is_published' => 'nullable',
            'category_id'=> 'nullable',      // таблиця products зєднана з таблицею categories
            'tags' => 'nullable|array',      // таблиця product tags з таблицею Tags
            'colors' => 'nullable|array'    // таблиця color products з таблицею colors
        ];
    }
}
