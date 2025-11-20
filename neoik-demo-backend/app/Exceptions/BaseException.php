<?php

namespace App\Exceptions;

use Exception;
use App\Helpers\ApiResponse;

class BaseException extends Exception
{
    protected $status;
    protected $errorCode;
    protected $errors;
    protected $meta;

    public function __construct($message = "", $status = 400, $errorCode = null, $errors = null, $meta = null)
    {
        parent::__construct($message);
        $this->status = $status;
        $this->errorCode = $errorCode;
        $this->errors = $errors;
        $this->meta = $meta;
    }

    public function render()
    {
        return ApiResponse::error(
            $this->getMessage(),
            $this->status,
            $this->errors,
            $this->meta
        );
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function getErrorCode()
    {
        return $this->errorCode;
    }

    public function getErrors()
    {
        return $this->errors;
    }

    public function getMeta()
    {
        return $this->meta;
    }
}
