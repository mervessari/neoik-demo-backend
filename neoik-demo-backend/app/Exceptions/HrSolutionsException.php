<?php

namespace App\Exceptions;

class HrSolutionsException extends BaseException
{
    public static function notFound($id)
    {
        return new self("HR Solution with ID $id not found.");
    }
}
