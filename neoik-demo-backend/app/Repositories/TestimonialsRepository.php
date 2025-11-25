<?php

namespace App\Repositories;

use App\Models\Testimonial;
use Illuminate\Database\Eloquent\Model;

class TestimonialsRepository extends BaseRepository
{
    protected function model(): Model
    {
        return new Testimonial();
    }
}
