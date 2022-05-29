<?php

namespace App\Http\Requests\Backend\Slider;

use Illuminate\Foundation\Http\FormRequest;

class SliderStoreRequest extends FormRequest
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
            'image' => ['required', 'image', 'mimes:jpg,png,jpeg'],
            'title_az' => ['required', 'string', 'max:100'],
            'title_en' => ['required', 'string', 'max:100'],
            'title_ru' => ['required', 'string', 'max:100'],
            'description_az' => ['required', 'string', 'max:1000'],
            'description_en' => ['required', 'string', 'max:1000'],
            'description_ru' => ['required', 'string', 'max:1000'],
            'is_active' => ['required', 'bool'],
        ];
    }
}
