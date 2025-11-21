<?php

namespace App\Repositories;

use App\Models\Hero;

class HeroRepository
{
    public function all()
    {
        return Hero::all();
    }

    // FIND NULLABLE
    public function findNullable($id)
    {
        return Hero::find($id);
    }

    // EXISTS BADGE (unique control)
    public function existsBadge($badge)
    {
        if (!$badge) return false;

        return Hero::where('badge', $badge)->exists();
    }

    public function create(array $data)
    {
        return Hero::create($data);
    }

    public function update($id, array $data)
    {
        $hero = Hero::find($id);
        if (!$hero) return null;

        $hero->update($data);
        return $hero;
    }

    public function delete($id)
    {
        $hero = Hero::find($id);
        if (!$hero) return false;

        $hero->delete();
        return true;
    }
}
