<?php

namespace App\Http\Requests\Backend\Social;

use Illuminate\Foundation\Http\FormRequest;

class SocialStoreRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:100'],
            'icon' => ['required', 'string', 'max:50'],
            'url' => ['required', 'url', 'max:255'],
        ];
    }
}
