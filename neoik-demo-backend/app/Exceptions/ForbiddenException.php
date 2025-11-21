<?php

namespace App\Exceptions;

class ForbiddenException extends BaseException
{
    public function __construct(
        string $message = 'Access forbidden',
        mixed $errors = null,
        mixed $meta = null
    ) {
        parent::__construct(
            $message,
            403,
            $errors,
            $meta
        );
    }
}
