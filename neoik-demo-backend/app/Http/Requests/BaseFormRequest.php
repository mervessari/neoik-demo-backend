<?php

namespace App\Http\Requests;
//ŞUANLIK ŞART DEĞİL ÖZEL HATA FORMATI İÇİN KULLANABİLİRİZ
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class BaseFormRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true; // tüm request'lere izin ver
    }

    protected function failedValidation(Validator $validator)
    {
        // Validasyon hatası → JSON formatında döner
        throw new HttpResponseException(response()->json([
            'status'  => 'error',
            'message' => 'Validation failed',
            'errors'  => $validator->errors(),
        ], 422));
    }
}
