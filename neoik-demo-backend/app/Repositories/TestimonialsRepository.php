<?php

namespace App\Repositories;

use App\Models\Testimonial;

class TestimonialsRepository
{
    public function all()
    {
        return Testimonial::all();
    }

    public function findNullable($id)
    {
        return Testimonial::find($id);
    }

    public function create(array $data)
    {
        return Testimonial::create($data);
    }

    public function update($id, array $data)
    {
        $item = Testimonial::find($id);
        if (!$item) return null;

        $item->update($data);
        return $item;
    }

    public function delete($id)
    {
        $item = Testimonial::find($id);
        if (!$item) return false;

        $item->delete();
        return true;
    }
}
