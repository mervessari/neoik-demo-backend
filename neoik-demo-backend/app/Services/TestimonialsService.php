<?php

namespace App\Services;

use App\Repositories\TestimonialsRepository;

class TestimonialsService extends BaseService
{
    public function __construct(
        protected TestimonialsRepository $repository
    ) {}

    protected function repository()
    {
        return $this->repository;
    }
}
