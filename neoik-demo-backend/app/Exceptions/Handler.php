<?php

namespace App\Exceptions;

use Throwable;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Validation\ValidationException as LaravelValidationException;

class Handler extends ExceptionHandler
{
    public function register(): void
    {
        // FormRequest validation
        $this->renderable(function (LaravelValidationException $e, $request) {
            return response()->json([
                'success' => false,
                'message' => 'Validation failed',
                'errors'  => $e->errors(),
            ], 422);
        });

        // Domain-specific BaseException
        $this->renderable(function (BaseException $e, $request) {
            return $e->render();
        });

        // Unhandled system errors
        $this->renderable(function (Throwable $e, $request) {
            return response()->json([
                'success' => false,
                'message' => 'Internal server error',
            ], 500);
        });
    }
}
