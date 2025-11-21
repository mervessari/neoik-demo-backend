<?php

namespace App\Http\Requests\Testimonial;
use Illuminate\Foundation\Http\FormRequest;

class TestimonialStoreRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'badge'        => ['nullable', 'string', 'max:255'],
            'title'        => ['required', 'string', 'max:255'],
            'subtitle'     => ['nullable', 'string', 'max:500'],
            'cta'          => ['nullable', 'string', 'max:255'],
            'mehmet'       => ['nullable', 'string'],
            'semih'        => ['nullable', 'string'],
            'abdurrahman'  => ['nullable', 'string'],
        ];
    }
}
