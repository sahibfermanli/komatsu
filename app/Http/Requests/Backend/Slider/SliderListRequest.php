<?php

namespace App\Http\Requests\Backend\Slider;

use Illuminate\Foundation\Http\FormRequest;

class SliderListRequest extends FormRequest
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
                'is_active' => ['nullable', 'integer', 'in:1,2,3'],
                'search' => ['nullable', 'string', 'max:255']
            ]
        ];
    }
}
