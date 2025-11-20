<?php

namespace App\Exceptions;

class HeroException extends BaseException
{
    public static function notFound($id)
    {
        return new self("Hero with ID $id not found.");
    }
}
