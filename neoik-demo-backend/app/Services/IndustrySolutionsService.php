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

    public function getIndustrySolutions($filter = null)
    {
        $solutions = $this->repository->all();
        if ($filter) {
            $solutions = $solutions->where('badge', $filter);
        }
        $solutions->transform(function ($item) {
            $item->title = strtoupper($item->title);
            return $item;
        });
        return $solutions;
    }

    public function getIndustrySolution($id)
    {
        return $this->repository->find($id);
    }

    public function createIndustrySolution($data)
    {
        // İş mantığı: validasyon vs. eklenebilir
        return $this->repository->create($data);
    }

    public function updateIndustrySolution($id, $data)
    {
        return $this->repository->update($id, $data);
    }

    public function deleteIndustrySolution($id)
    {
        return $this->repository->delete($id);
    }
}
