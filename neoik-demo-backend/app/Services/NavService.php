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

    public function getNavs($filter = null)
    {
        $items = $this->repository->all();
        if ($filter) {
            $items = $items->where('clients', $filter);
        }
        $items->transform(function ($item) {
            $item->contact = strtoupper($item->contact);
            return $item;
        });
        return $items;
    }

    public function getNav($id)
    {
        return $this->repository->find($id);
    }

    public function createNav($data)
    {
        return $this->repository->create($data);
    }

    public function updateNav($id, $data)
    {
        return $this->repository->update($id, $data);
    }

    public function deleteNav($id)
    {
        return $this->repository->delete($id);
    }
}
