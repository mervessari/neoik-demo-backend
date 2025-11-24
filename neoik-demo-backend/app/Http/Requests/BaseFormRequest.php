<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

abstract class BaseFormRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    /**
     * GLOBAL VALIDATION ERROR FORMATTER
     */
    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json([
            'status'  => 'error',
            'message' => 'Validation failed',
            'errors'  => $validator->errors(),
        ], 422));
    }

    /**
     *  GLOBAL TRANSLATABLE RULE GENERATOR
     *
     * @param string $field
     * @param string $rule
     * @return array
     */
    protected function translatableRules(string $field, string $rule = 'string'): array
    {
        // Ana key bir array olmalı
        $rules = [
            $field => ['nullable', 'array'],
        ];

        // Her dil için dinamik alt key rule
        foreach (config('app.languages') as $locale) {
            $rules["{$field}.{$locale}"] = ['nullable', $rule];
        }

        return $rules;
    }
}
