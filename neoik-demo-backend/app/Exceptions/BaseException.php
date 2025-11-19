<?php

namespace App\Exceptions;

use Exception;

class BaseException extends Exception
{
    public function render()
    {
        return response()->json([
            "success" => false,
            "message" => $this->getMessage(),
        ], 400);
    }
}
