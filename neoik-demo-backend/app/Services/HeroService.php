<?php

namespace App\Services;

use App\Repositories\HeroRepository;

class HeroService
{
    protected HeroRepository $repository;

    public function __construct(HeroRepository $repository)
    {
        $this->repository = $repository;
    }

    public function getHero(): array
    {
        return $this->repository->get();
    }
}
