<?php

namespace App\Services;

use App\Repositories\HeroRepository;
use App\Exceptions\ConflictException;

class HeroService extends BaseService
{
    public function __construct(
        protected HeroRepository $repository
    ) {}

    protected function repository()
    {
        return $this->repository;
    }

    public function create(array $data)
    {
        if (!empty($data['badge']) && $this->repository->existsBadge($data['badge'])) {
            throw new ConflictException("Bu badge zaten kullanılıyor.");
        }

        return parent::create($data);
    }

    public function update(int $id, array $data)
    {
        $hero = $this->getOrFail($id);

        if (!empty($data['badge']) && $data['badge'] !== $hero->badge) {
            if ($this->repository->existsBadge($data['badge'])) {
                throw new ConflictException("Bu badge başka bir hero tarafından kullanılıyor.");
            }
        }

        return parent::update($id, $data);
    }
}
