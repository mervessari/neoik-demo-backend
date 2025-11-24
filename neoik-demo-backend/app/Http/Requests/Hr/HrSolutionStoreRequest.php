<?php

namespace App\Http\Requests\Hr;

use App\Http\Requests\BaseFormRequest;

class HrSolutionStoreRequest extends BaseFormRequest
{
    public function rules(): array
    {
    return array_merge(
    $this->translatableRules('badge'),
    $this->translatableRules('title'),
    $this->translatableRules('subtitle'),
    $this->translatableRules('personnel'),
    $this->translatableRules('financial'),
    $this->translatableRules('leave'),
    $this->translatableRules('document'),
    $this->translatableRules('inventory'),
    $this->translatableRules('performance'),
    $this->translatableRules('cta')
);
    }
}
