<?php

namespace App\Exceptions;

class ServiceException extends BaseException
{
    public function __construct(
        string $message = 'Service error.',
        mixed $errors = null,
        mixed $meta = null
    ) {
        parent::__construct(
            $message,
            500,
            $errors,
            $meta
        );
    }
}
