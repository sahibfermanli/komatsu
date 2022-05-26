<?php

namespace App\Http\Requests\Backend\Product;

use App\Models\Category;
use App\Rules\ImageRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProductUpdateRequest extends FormRequest
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
            'category_id' => ['required', 'integer', Rule::exists(Category::class, 'id')->whereNull('deleted_at')],
            'image' => ['nullable', new ImageRule()],
            'name_az' => ['required', 'string', 'max:100'],
            'name_en' => ['required', 'string', 'max:100'],
            'name_ru' => ['required', 'string', 'max:100'],
            'model' => ['required', 'string', 'max:150'],
            'capacity' => ['required', 'string', 'max:150'],
            'front' => ['required', 'string', 'max:150'],
            'travel_speed' => ['required', 'string', 'max:150'],
            'lifting_speed' => ['required', 'string', 'max:150'],
            'outside_turning_radius' => ['required', 'string', 'max:150'],
            'operating_weight' => ['required', 'string', 'max:150'],
            'engine_power' => ['required', 'string', 'max:150'],
        ];
    }
}
