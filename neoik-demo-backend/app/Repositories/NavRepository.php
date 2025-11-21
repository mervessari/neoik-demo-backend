<?php

namespace App\Repositories;

use App\Models\Nav;

class NavRepository
{

    public function all()
    {
        return Nav::all();
    }
    public function findNullable($id)
    {
        return Nav::find($id);
    }

    public function create(array $data)
    {
        return Nav::create($data);
    }

    public function update($id, array $data)
    {
        $item = Nav::find($id);
        if (!$item) return null;

        $item->update($data);
        return $item;
    }

    public function delete($id)
    {
        $item = Nav::find($id);
        if (!$item) return false;

        $item->delete();
        return true;
    }
}
