<?php

namespace App\Http\Requests\Hero;

use Illuminate\Foundation\Http\FormRequest;

class HeroUpdateRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'badge'           => ['sometimes', 'string', 'max:255'],
            'title'           => ['sometimes', 'string', 'max:255'],
            'title_highlight' => ['sometimes', 'string', 'max:255'],
            'subtitle'        => ['sometimes', 'string', 'max:500'],
            'button_text'     => ['sometimes', 'string', 'max:255'],
            'trusted_by'      => ['sometimes', 'string', 'max:255'],
        ];
    }
}
