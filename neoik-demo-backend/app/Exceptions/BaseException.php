<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Http\JsonResponse;

class BaseException extends Exception
{
    public function __construct(
        string $message = 'Unexpected error',
        protected int $status = 400,
        protected mixed $errors = null,
        protected mixed $meta = null
    ) {
        parent::__construct($message);
    }

    public function render(): JsonResponse
    {
        $response = [
            'success' => false,
            'message' => $this->getMessage(),
        ];

        if ($this->errors) {
            $response['errors'] = $this->errors;
        }

        if ($this->meta) {
            $response['meta'] = $this->meta;
        }

        return response()->json($response, $this->status);
    }
}
