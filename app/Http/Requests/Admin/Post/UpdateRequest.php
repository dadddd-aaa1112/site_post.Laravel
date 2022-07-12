<?php

namespace App\Http\Requests\Admin\Post;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'title' => 'required|string',
            'content' => 'required|string',
            'main_image' => 'nullable|file',
            'preview_image' => 'nullable|file',
            'category_id' => 'required|integer|exists:categories,id',
            'tag_ids' => 'nullable|array',
            'tag_ids.*' => 'nullable|integer|exists:tags,id',

        ];
    }

    public function messages() {
        return [
            'title.required' => 'требуемое поле титл',
            'title.string' => 'текстовое поле',
            'content.required' => 'требуемое поле контент',
            'content.string' => 'текстовое поле',
            'main_image.required' => 'требуемое поле мейн имейдж',
            'main_image.file' => 'файл должен быть',
            'preview_image.required' => 'требуемое поле превью имейдж',
            'preview_image.file' => 'должен быть файл',
            'category_id.required' => 'требуемое поле',
            'category_id.exists' => 'категория должна быть сущ',
            'tag_ids' => 'введите массив'
        ];
    }
}
