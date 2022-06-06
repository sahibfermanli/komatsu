<?php

namespace App\Http\Requests\Backend\Brochure;

use Illuminate\Foundation\Http\FormRequest;

class BrochureStoreRequest extends FormRequest
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
            'file' => ['required', 'file', 'mimes:pdf'],
            'title_az' => ['required', 'string', 'max:255'],
            'title_en' => ['required', 'string', 'max:255'],
            'title_ru' => ['required', 'string', 'max:255'],
        ];
    }
}