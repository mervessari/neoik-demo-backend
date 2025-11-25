<?php

namespace App\Services;

use App\Repositories\IndustrySolutionsRepository;

class IndustrySolutionsService extends BaseService
{
    public function __construct(
        protected IndustrySolutionsRepository $repository
    ) {}

    protected function repository()
    {
        return $this->repository;
    }
}
