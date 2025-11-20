<?php

namespace App\Exceptions;

class IndustrySolutionsException extends BaseException
{
    public static function notFound($id)
    {
        return new self("Industry Solution with ID $id not found.");
    }
}
