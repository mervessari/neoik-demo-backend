<?php

namespace App\Http\Requests\Hr;

use Illuminate\Foundation\Http\FormRequest;

class HrSolutionUpdateRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'badge'      => ['sometimes', 'string', 'max:255'],
            'title'      => ['sometimes', 'string', 'max:255'],
            'subtitle'   => ['sometimes', 'string', 'max:500'],
            'personnel'  => ['sometimes', 'string'],
            'financial'  => ['sometimes', 'string'],
            'leave'      => ['sometimes', 'string'],
            'document'   => ['sometimes', 'string'],
            'inventory'  => ['sometimes', 'string'],
            'performance'=> ['sometimes', 'string'],
            'cta'        => ['sometimes', 'string', 'max:255'],
        ];
    }
}
