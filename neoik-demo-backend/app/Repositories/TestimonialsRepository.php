<?php

namespace App\Repositories;

use App\Models\Testimonial;

class TestimonialsRepository
{
    public function all()
    {
        return Testimonial::all();
    }

    public function find($id)
    {
        return Testimonial::findOrFail($id);
    }

    public function create(array $data)
    {
        return Testimonial::create($data);
    }

    public function update($id, array $data)
    {
        $testimonial = Testimonial::findOrFail($id);
        $testimonial->update($data);
        return $testimonial;
    }

    public function delete($id)
    {
        $testimonial = Testimonial::findOrFail($id);
        $testimonial->delete();
        return true;
    }
}
