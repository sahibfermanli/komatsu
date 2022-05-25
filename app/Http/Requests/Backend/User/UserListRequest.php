<?php

namespace App\Http\Requests\Backend\User;

use Illuminate\Foundation\Http\FormRequest;

class UserListRequest extends FormRequest
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
                'search' => ['nullable', 'string', 'max:255']
            ]
        ];
    }
}
