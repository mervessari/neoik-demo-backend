<?php

namespace App\Http\Requests\Testimonial;

use App\Http\Requests\BaseFormRequest;

class TestimonialUpdateRequest extends BaseFormRequest
{
    public function rules(): array
    {
        return array_merge(
            $this->translatableRules('badge'),
            $this->translatableRules('title'),
            $this->translatableRules('subtitle'),
            $this->translatableRules('cta'),
            $this->translatableRules('mehmet'),
            $this->translatableRules('semih'),
            $this->translatableRules('abdurrahman')
        );
    }
}
