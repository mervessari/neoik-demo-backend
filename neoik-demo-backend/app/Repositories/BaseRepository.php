<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

abstract class BaseRepository
{
    abstract protected function model(): Model;

    public function all()
    {
        return $this->model()->get();
    }

    public function find($id)
    {
        return $this->model()->find($id);
    }

    public function create(array $data)
    {
        return $this->model()->create($data);
    }

    public function update($id, array $data)
    {
        $model = $this->find($id);
        if (!$model) return null;

        $model->update($data);
        return $model;
    }

    public function delete($id)
    {
        $model = $this->find($id);
        if (!$model) return false;

        return $model->delete();
    }
}
