<?php

namespace App\Http\Requests\Backend\Category;

use App\Models\Category;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CategoryStoreRequest extends FormRequest
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
            'parent_id' => ['nullable', 'integer', Rule::exists(Category::class, 'id')->whereNull('deleted_at')->whereNull('parent_id')],
            'name_az' => ['required', 'string', 'max:100'],
            'name_en' => ['required', 'string', 'max:100'],
            'name_ru' => ['required', 'string', 'max:100'],
        ];
    }
}
