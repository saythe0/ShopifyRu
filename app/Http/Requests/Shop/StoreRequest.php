<?php

namespace App\Http\Requests\Shop;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'subdomain' => [
                'required',
                'string',
                'max:255',
                'unique:shops',
                'regex:/^[a-z0-9-]+$/',
                'not_regex:/^-|-$/',
            ],
            'description' => 'nullable|string|max:500',
        ];
    }
}
