<?php

namespace App\Exceptions;

use Throwable;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Http\JsonResponse;
use Illuminate\Validation\ValidationException;

class Handler extends ExceptionHandler
{
    /**
     * Register the exception handling callbacks.
     */
    public function register(): void
    {
        // Validation Exception → JSON format
        $this->renderable(function (ValidationException $e, $request) {
            return response()->json([
                'status' => 'error',
                'message' => 'Validation failed',
                'errors' => $e->errors(),
            ], 422);
        });

        // Custom BaseException
        $this->renderable(function (BaseException $e, $request) {
            return response()->json([
                'status' => 'error',
                'message' => $e->getMessage(),
                'code' => $e->getCode(),
            ], $e->getHttpStatus());
        });

        // Fallback – Other exceptions (unexpected)
        $this->renderable(function (Throwable $e, $request) {
            return response()->json([
                'status' => 'error',
                'message' => 'Something went wrong!',
                'exception' => class_basename($e),
            ], 500);
        });
    }
}
