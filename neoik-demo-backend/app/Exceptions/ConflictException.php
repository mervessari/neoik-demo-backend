<?php

namespace App\Exceptions;

class ConflictException extends BaseException
{
    public function __construct(
        string $message = 'Conflict error',
        mixed $errors = null,
        mixed $meta = null
    ) {
        parent::__construct(
            $message,
            409,
            $errors,
            $meta
        );
    }
}
