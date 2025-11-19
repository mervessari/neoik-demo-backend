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

    public function getTestimonials(): array
    {
        return $this->repository->get();
    }
}
