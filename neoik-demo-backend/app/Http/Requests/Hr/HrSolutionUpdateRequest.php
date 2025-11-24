<?php

namespace App\Http\Requests\Hr;

use App\Http\Requests\BaseFormRequest;

class HrSolutionUpdateRequest extends BaseFormRequest
{
    /**
     * Translatable alanların listesi.
     */
    protected array $translatableFields = [
        'badge',
        'title',
        'subtitle',
        'personnel',
        'financial',
        'leave',
        'document',
        'inventory',
        'performance',
        'cta',
    ];

    public function authorize(): bool
    {
        // ileride policy bağlarsın, şimdilik true
        return true;
    }

    /**
     * Validation kurallarını üret.
     */
    public function rules(): array
    {
        $rules = [];

        foreach ($this->translatableFields as $field) {
            $rules = array_merge($rules, $this->translatableRules($field));
        }

        return $rules;
    }

    /**
     * Custom validation messages.
     * Translatable alanlar için otomatik human-readable hata üretimi.
     */
    public function messages(): array
    {
        $messages = [];

        foreach ($this->translatableFields as $field) {
            $messages["{$field}.required"] = ucfirst($field) . " field is required.";
            $messages["{$field}.string"]   = ucfirst($field) . " field must be a valid string.";
            $messages["{$field}.array"]    = ucfirst($field) . " translations must be an array.";
        }

        return $messages;
    }

    /**
     * Human-readable attribute names.
     */
    public function attributes(): array
    {
        $attributes = [];

        foreach ($this->translatableFields as $field) {
            $attributes[$field] = ucfirst(str_replace('_', ' ', $field));
        }

        return $attributes;
    }
}
