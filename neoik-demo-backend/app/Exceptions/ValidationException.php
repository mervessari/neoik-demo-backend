<?php

namespace App\Exceptions;

class ValidationException extends BaseException
{
    public function __construct(
        string $message = 'Validation error',
        array $errors = [],
        mixed $meta = null
    ) {
        parent::__construct(
            $message,
            422,
            $errors,
            $meta
        );
    }
}
