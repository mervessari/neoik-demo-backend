<?php

namespace App\Http\Requests\Nav;

use Illuminate\Foundation\Http\FormRequest;

class NavUpdateRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'hr_solutions'       => ['sometimes', 'string', 'max:255'],
            'industry_solutions' => ['sometimes', 'string', 'max:255'],
            'clients'            => ['sometimes', 'string', 'max:255'],
            'contact'            => ['sometimes', 'string', 'max:255'],
        ];
    }
}
