<?php

namespace App\Http\Requests\Hr;

use Illuminate\Foundation\Http\FormRequest;

class HrSolutionStoreRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'badge'      => ['nullable', 'string', 'max:255'],
            'title'      => ['required', 'string', 'max:255'],
            'subtitle'   => ['nullable', 'string', 'max:500'],
            'personnel'  => ['nullable', 'string'],
            'financial'  => ['nullable', 'string'],
            'leave'      => ['nullable', 'string'],
            'document'   => ['nullable', 'string'],
            'inventory'  => ['nullable', 'string'],
            'performance'=> ['nullable', 'string'],
            'cta'        => ['nullable', 'string', 'max:255'],
        ];
    }
}
