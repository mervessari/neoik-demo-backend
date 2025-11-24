<?php

namespace App\Http\Requests\Industry;

use App\Http\Requests\BaseFormRequest;

class IndustrySolutionUpdateRequest extends BaseFormRequest

{
    public function rules(): array
    {
        return array_merge(
            $this->translatableRules('badge'),
            $this->translatableRules('title'),
            $this->translatableRules('subtitle'),
            $this->translatableRules('manufacturing'),
            $this->translatableRules('healthcare'),
            $this->translatableRules('retail')
        );
    }
}
