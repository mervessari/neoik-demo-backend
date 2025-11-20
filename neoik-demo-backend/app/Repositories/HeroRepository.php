<?php

namespace App\Repositories;


use App\Models\Hero;

class HeroRepository
{
    public function all()
    {
        return Hero::all();
    }

    public function find($id)
    {
        return Hero::findOrFail($id);
    }

    public function create(array $data)
    {
        return Hero::create($data);
    }

    public function update($id, array $data)
    {
        $hero = Hero::findOrFail($id);
        $hero->update($data);
        return $hero;
    }

    public function delete($id)
    {
        $hero = Hero::findOrFail($id);
        $hero->delete();
        return true;
    }
}
