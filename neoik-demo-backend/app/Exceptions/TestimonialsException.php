<?php

namespace App\Exceptions;

class TestimonialsException extends BaseException
{
    public static function notFound($id)
    {
        return new self("Testimonial with ID $id not found.");
    }
}
