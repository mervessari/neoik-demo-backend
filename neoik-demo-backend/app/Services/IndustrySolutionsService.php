<?php

namespace App\Services;

use App\Repositories\IndustrySolutionsRepository;

class IndustrySolutionsService
{
    protected IndustrySolutionsRepository $repository;

    public function __construct(IndustrySolutionsRepository $repository)
    {
        $this->repository = $repository;
    }

    public function getIndustrySolutions(): array
    {
        return $this->repository->get();
    }
}
