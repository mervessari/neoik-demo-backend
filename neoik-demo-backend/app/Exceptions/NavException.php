<?php

namespace App\Exceptions;

class NavException extends BaseException
{
    public static function notFound($id)
    {
        return new self("Nav with ID $id not found.");
    }
}
