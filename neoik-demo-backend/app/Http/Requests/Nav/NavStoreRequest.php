<?php

namespace App\Http\Requests\Nav;

use Illuminate\Foundation\Http\FormRequest;

class NavStoreRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'hr_solutions'       => ['nullable', 'string', 'max:255'],
            'industry_solutions' => ['nullable', 'string', 'max:255'],
            'clients'            => ['nullable', 'string', 'max:255'],
            'contact'            => ['nullable', 'string', 'max:255'],
        ];
    }
}
