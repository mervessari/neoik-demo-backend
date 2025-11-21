<?php

namespace App\Exceptions;

use Exception;

class BaseException extends Exception
{
    protected int $status;
    protected mixed $errors;
    protected mixed $meta;

    public function __construct(
        string $message = '',
        int $status = 400,
        mixed $errors = null,
        mixed $meta = null
    ) {
        parent::__construct($message);

        $this->status = $status;
        $this->errors = $errors;
        $this->meta = $meta;
    }

    public function getStatus(): int
    {
        return $this->status;
    }

    public function getErrors(): mixed
    {
        return $this->errors;
    }

    public function getMeta(): mixed
    {
        return $this->meta;
    }
}
