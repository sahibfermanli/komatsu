<?php

namespace App\Http\Requests\Backend\Brochure;

use App\Rules\ImageRule;
use App\Rules\PdfRule;
use Illuminate\Foundation\Http\FormRequest;

class BrochureUpdateRequest extends FormRequest
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
            'image' => ['nullable', new ImageRule()],
            'file' => ['nullable', new PdfRule()],
            'title_az' => ['required', 'string', 'max:255'],
            'title_en' => ['required', 'string', 'max:255'],
            'title_ru' => ['required', 'string', 'max:255'],
        ];
    }
}
