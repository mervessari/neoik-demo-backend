<?php

namespace App\Services;

use App\Repositories\TestimonialsRepository;

class TestimonialsService
{
    protected TestimonialsRepository $repository;

    public function __construct(TestimonialsRepository $repository)
    {
        $this->repository = $repository;
    }

    public function getTestimonials($filter = null)
    {
        $items = $this->repository->all();
        if ($filter) {
            $items = $items->where('badge', $filter);
        }
        $items->transform(function ($item) {
            $item->title = ucfirst($item->title);
            return $item;
        });
        return $items;
    }

    public function getTestimonial($id)
    {
        return $this->repository->find($id);
    }

    public function createTestimonial($data)
    {
        return $this->repository->create($data);
    }

    public function updateTestimonial($id, $data)
    {
        return $this->repository->update($id, $data);
    }

    public function deleteTestimonial($id)
    {
        return $this->repository->delete($id);
    }
}
