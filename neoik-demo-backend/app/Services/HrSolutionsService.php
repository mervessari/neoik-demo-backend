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

    public function getHrSolutions($filter = null)
    {
        $items = $this->repository->all();
        if ($filter) {
            $items = $items->where('badge', $filter);
        }
        $items->transform(function ($item) {
            $item->title = ucfirst($item->title);
            return $item;
        });
        return $items;
    }

    public function getHrSolution($id)
    {
        return $this->repository->find($id);
    }

    public function createHrSolution($data)
    {
        // İş mantığı: veri doğrulama
        return $this->repository->create($data);
    }

    public function updateHrSolution($id, $data)
    {
        // İş mantığı: veri işleme
        return $this->repository->update($id, $data);
    }

    public function deleteHrSolution($id)
    {
        return $this->repository->delete($id);
    }
}
