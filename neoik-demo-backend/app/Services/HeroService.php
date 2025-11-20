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

    public function getHeroes($filter = null)
    {
        $heroes = $this->repository->all();
        if ($filter) {
            $heroes = $heroes->where('badge', $filter);
        }
        $heroes->transform(function ($item) {
            $item->title = ucfirst($item->title);
            return $item;
        });
        return $heroes;
    }

    public function getHero($id)
    {
        return $this->repository->find($id);
    }

    public function createHero($data)
    {
        // Örnek iş mantığı: veri doğrulama
        // ...
        return $this->repository->create($data);
    }

    public function updateHero($id, $data)
    {
        // Örnek iş mantığı: veri işleme
        // ...
        return $this->repository->update($id, $data);
    }

    public function deleteHero($id)
    {
        return $this->repository->delete($id);
    }
}
