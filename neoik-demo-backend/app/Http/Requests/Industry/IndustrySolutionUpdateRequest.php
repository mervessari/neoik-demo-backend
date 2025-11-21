<?php

namespace App\Http\Requests\Industry;

use Illuminate\Foundation\Http\FormRequest;

class IndustrySolutionUpdateRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'badge'        => ['sometimes', 'string', 'max:255'],
            'title'        => ['sometimes', 'string', 'max:255'],
            'subtitle'     => ['sometimes', 'string', 'max:500'],
            'manufacturing'=> ['sometimes', 'string'],
            'healthcare'   => ['sometimes', 'string'],
            'retail'       => ['sometimes', 'string'],
        ];
    }
}
