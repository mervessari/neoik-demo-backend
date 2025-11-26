<?php

namespace App\Services;

use App\Exceptions\NotFoundException;

abstract class BaseService
{
    abstract protected function repository();

    protected function getOrFail(int $id)
    {
        $item = $this->repository()->findNullable($id);

        if (!$item) {
            throw new NotFoundException("Record #{$id} not found.");
        }

        return $item;
    }

    public function all()
    {
        return $this->repository()->all();
    }

    public function find(int $id)
    {
        return $this->getOrFail($id);
    }

    public function create(array $data)
    {
        return $this->repository()->create($data);
    }

    public function update(int $id, array $data)
    {
        $this->getOrFail($id);

        return $this->repository()->update($id, $data);
    }

    public function delete(int $id)
    {
        $this->getOrFail($id);

        return $this->repository()->delete($id);
    }
}
