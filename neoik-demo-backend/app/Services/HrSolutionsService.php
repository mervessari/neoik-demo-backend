<?php

namespace App\Services;

use App\Repositories\HrSolutionsRepository;

class HrSolutionsService
{
    protected HrSolutionsRepository $repository;

    public function __construct(HrSolutionsRepository $repository)
    {
        $this->repository = $repository;
    }

    public function getHrSolutions(): array
    {
        return $this->repository->get();
    }
}
