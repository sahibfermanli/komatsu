<?php

namespace App\Http\Requests\Backend\Category;

use App\Models\Category;
use App\Rules\ImageRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CategoryUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'parent_id' => ['nullable', 'integer', Rule::notIn([$this->route('category')->id]) , Rule::exists(Category::class, 'id')->whereNull('deleted_at')->whereNull('parent_id')],
            'image' => ['nullable', new ImageRule()],
            'name_az' => ['required', 'string', 'max:100'],
            'name_en' => ['required', 'string', 'max:100'],
            'name_ru' => ['required', 'string', 'max:100'],
            'description_az' => ['required', 'string', 'max:1000'],
            'description_en' => ['required', 'string', 'max:1000'],
            'description_ru' => ['required', 'string', 'max:1000'],
        ];
    }
}
