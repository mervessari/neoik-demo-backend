<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

abstract class BaseRepository
{
    /**
     * Her repository kendi model instance’ını döndürür.
     */
    abstract protected function model(): Model;

    /**
     * Tüm kayıtları getir.
     */
    public function all()
    {
        return $this->model()->get();
    }

    /**
     * Nullable find.
     */
    public function findNullable(int $id)
    {
        return $this->model()->find($id);
    }

    /**
     * Zorunlu find (bulamazsa null döner).
     */
    public function find(int $id)
    {
        return $this->model()->find($id);
    }

    /**
     * Kayıt oluştur.
     */
    public function create(array $data)
    {
        return $this->model()->create($data);
    }

    /**
     * Kayıt güncelle.
     */
    public function update(int $id, array $data)
    {
        $item = $this->findNullable($id);
        if (!$item) {
            return null;
        }

        $item->update($data);
        return $item;
    }

    /**
     * Kayıt sil.
     */
    public function delete(int $id): bool
    {
        $item = $this->findNullable($id);
        if (!$item) {
            return false;
        }

        return (bool) $item->delete();
    }
}
