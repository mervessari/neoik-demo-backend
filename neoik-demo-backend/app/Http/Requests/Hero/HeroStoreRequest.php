<?php

namespace App\Http\Requests\Hero;

use App\Http\Requests\BaseFormRequest;

class HeroStoreRequest extends BaseFormRequest

{
    public function rules(): array
    {
        return array_merge(
            $this->translatableRules('badge'),
            $this->translatableRules('title'),
            $this->translatableRules('title_highlight'),
            $this->translatableRules('subtitle'),
            $this->translatableRules('button_text'),
            $this->translatableRules('trusted_by')
        );
    }
}
