<?php

namespace App\Http\Requests\Industry;

use Illuminate\Foundation\Http\FormRequest;

class IndustrySolutionStoreRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'badge'        => ['nullable', 'string', 'max:255'],
            'title'        => ['required', 'string', 'max:255'],
            'subtitle'     => ['nullable', 'string', 'max:500'],
            'manufacturing'=> ['nullable', 'string'],
            'healthcare'   => ['nullable', 'string'],
            'retail'       => ['nullable', 'string'],
        ];
    }
}
