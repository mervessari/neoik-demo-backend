<?php

namespace App\Repositories;

use App\Models\IndustrySolution;

class IndustrySolutionsRepository
{

    public function all()
    {
        return IndustrySolution::all();
    }

  

    public function findNullable($id)
    {
        return IndustrySolution::find($id);
    }

    public function create(array $data)
    {
        return IndustrySolution::create($data);
    }

    public function update($id, array $data)
    {
        $item = IndustrySolution::find($id);
        if (!$item) return null;

        $item->update($data);
        return $item;
    }

    public function delete($id)
    {
        $item = IndustrySolution::find($id);
        if (!$item) return false;

        $item->delete();
        return true;
    }
}
