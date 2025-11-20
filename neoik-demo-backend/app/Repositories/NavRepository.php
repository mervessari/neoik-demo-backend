<?php

namespace App\Repositories;

use App\Models\Nav;

class NavRepository
{
    public function all()
    {
        return Nav::all();
    }

    public function find($id)
    {
        return Nav::findOrFail($id);
    }

    public function create(array $data)
    {
        return Nav::create($data);
    }

    public function update($id, array $data)
    {
        $nav = Nav::findOrFail($id);
        $nav->update($data);
        return $nav;
    }

    public function delete($id)
    {
        $nav = Nav::findOrFail($id);
        $nav->delete();
        return true;
    }
}
