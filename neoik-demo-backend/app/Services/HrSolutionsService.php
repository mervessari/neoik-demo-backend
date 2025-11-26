<?php

namespace App\Services;

use App\Repositories\HrSolutionsRepository;

class HrSolutionsService extends BaseService
{
    public function __construct(
        protected HrSolutionsRepository $repository
    ) {}

    protected function repository()
    {
        return $this->repository;
    }
}
