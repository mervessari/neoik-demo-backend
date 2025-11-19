<?php

namespace App\Services;

use App\Repositories\NavRepository;

class NavService
{
    protected NavRepository $repository;

    public function __construct(NavRepository $repository)
    {
        $this->repository = $repository;
    }

    public function getNav(): array
    {
        return $this->repository->get();
    }
}
