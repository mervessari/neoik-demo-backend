<?php

namespace App\Services;

use App\Repositories\HrSolutionsRepository;
use App\Exceptions\NotFoundException;

class HrSolutionsService
{
    public function __construct(
        protected HrSolutionsRepository $repository
    ) {}

    private function getOrFail($id)
    {
        $item = $this->repository->findNullable($id);

        if (! $item) {
            throw new NotFoundException("HR Solution #{$id} bulunamadı.");
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
        return $this->repository->create($data);
    }

    public function update($id, array $data)
    {
        $this->getOrFail($id);

        return $this->repository->update($id, $data);
    }

    public function delete($id)
    {
        $this->getOrFail($id);

        return $this->repository->delete($id);
    }
}
