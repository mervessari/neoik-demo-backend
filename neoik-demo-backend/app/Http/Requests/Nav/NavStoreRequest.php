<?php

namespace App\Http\Requests\Nav;

use App\Http\Requests\BaseFormRequest;

class NavStoreRequest extends BaseFormRequest
{
    public function rules(): array
    {
        return array_merge(
            $this->translatableRules('hr_solutions'),
            $this->translatableRules('industry_solutions'),
            $this->translatableRules('clients'),
            $this->translatableRules('contact')
        );
    }
}
