<?php

namespace App\Services;

use App\Repositories\NavRepository;

class NavService extends BaseService
{
    public function __construct(
        protected NavRepository $repository
    ) {}

    protected function repository()
    {
        return $this->repository;
    }
}
