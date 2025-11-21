<?php

namespace App\Services;

use App\Repositories\HeroRepository;
use App\Exceptions\NotFoundException;
use App\Exceptions\ConflictException;

class HeroService
{
    public function __construct(
        protected HeroRepository $repository
    ) {}

    private function getOrFail($id)
    {
        $item = $this->repository->findNullable($id);

        if (! $item) {
            throw new NotFoundException("Hero #{$id} bulunamadı.");
        }

        return $item;
    }

    public function list()
    {
        return $this->repository->all();
    }

    public function find($id)
    {
        return $this->getOrFail($id);
    }

    public function create(array $data)
    {
        if (!empty($data['badge']) && $this->repository->existsBadge($data['badge'])) {
            throw new ConflictException("Bu badge zaten kullanılıyor.");
        }

        return $this->repository->create($data);
    }

    public function update($id, array $data)
    {
        $hero = $this->getOrFail($id);

        if (!empty($data['badge']) && $data['badge'] !== $hero->badge) {
            if ($this->repository->existsBadge($data['badge'])) {
                throw new ConflictException("Bu badge başka bir hero tarafından kullanılıyor.");
            }
        }

        return $this->repository->update($id, $data);
    }

    public function delete($id)
    {
        $this->getOrFail($id);

        return $this->repository->delete($id);
    }
}
