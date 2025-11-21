<?php

namespace App\Http\Requests\Testimonial;
use Illuminate\Foundation\Http\FormRequest;

class TestimonialUpdateRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'badge'        => ['sometimes', 'string', 'max:255'],
            'title'        => ['sometimes', 'string', 'max:255'],
            'subtitle'     => ['sometimes', 'string', 'max:500'],
            'cta'          => ['sometimes', 'string', 'max:255'],
            'mehmet'       => ['sometimes', 'string'],
            'semih'        => ['sometimes', 'string'],
            'abdurrahman'  => ['sometimes', 'string'],
        ];
    }
}
