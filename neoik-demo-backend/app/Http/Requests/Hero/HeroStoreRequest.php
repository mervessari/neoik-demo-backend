<?php

namespace App\Http\Requests\Hero;

use Illuminate\Foundation\Http\FormRequest;

class HeroStoreRequest extends FormRequest

{
    public function rules(): array
    {
        return [
            'badge'           => ['nullable', 'string', 'max:255'],
            'title'           => ['required', 'string', 'max:255'],
            'title_highlight' => ['nullable', 'string', 'max:255'],
            'subtitle'        => ['nullable', 'string', 'max:500'],
            'button_text'     => ['nullable', 'string', 'max:255'],
            'trusted_by'      => ['nullable', 'string', 'max:255'],
        ];
    }
}
