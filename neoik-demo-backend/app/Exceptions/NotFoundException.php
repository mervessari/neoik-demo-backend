<?php

namespace App\Exceptions;

class NotFoundException extends BaseException
{
    public function __construct(
        string $message = 'Resource not found',
        mixed $errors = null,
        mixed $meta = null
    ) {
        parent::__construct(
            $message,
            404,
            $errors,
            $meta
        );
    }
}
