<?php

namespace App\Exceptions;

use Throwable;
use App\Helpers\ApiResponse;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Validation\ValidationException as LaravelValidationException;

class Handler extends ExceptionHandler
{
    public function register(): void
    {
        // Laravel validation hataları
        $this->renderable(function (LaravelValidationException $e, $request) {
            return ApiResponse::validation(
                $e->errors(),
                'Validasyon hatası',
                422
            );
        });
        // Özel BaseException hataları
        $this->renderable(function (BaseException $e, $request) {
            return ApiResponse::error(
                $e->getMessage(),
                $e->getStatus(),
                $e->getErrors(),
                $e->getMeta()
            );
        });

        // Beklenmeyen tüm diğer hatalar
        $this->renderable(function (Throwable $e, $request) {
            return ApiResponse::error(
                'Beklenmeyen bir hata oluştu.',
                500,
                [
                    'exception' => class_basename($e),
                    'message'   => $e->getMessage(),
                ]
            );
        });
    }
}
