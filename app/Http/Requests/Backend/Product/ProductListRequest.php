<?php

namespace App\Http\Requests\Backend\Product;

use App\Models\Category;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProductListRequest extends FormRequest
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
            'pagination' => [
                'page' => ['filled', 'integer'],
                'perPage' => ['filled', 'integer', 'max:100']
            ],
            'query' => [
                'category_id' => ['nullable', 'integer', Rule::exists(Category::class, 'id')->whereNull('deleted_at')],
                'search' => ['nullable', 'string', 'max:255']
            ]
        ];
    }
}
