<?php

namespace App\Http\Requests\Backend\Partner;

use App\Rules\ImageRule;
use Illuminate\Foundation\Http\FormRequest;

class PartnerUpdateRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:255'],
            'url' => ['required', 'url', 'max:1000'],
        ];
    }
}
