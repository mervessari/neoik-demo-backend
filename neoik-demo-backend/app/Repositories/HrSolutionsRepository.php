<?php

namespace App\Repositories;

use App\Models\HrSolution;

class HrSolutionsRepository
{
    public function all()
    {
        return HrSolution::all();
    }


    public function findNullable($id)
    {
        return HrSolution::find($id);
    }

    public function create(array $data)
    {
        return HrSolution::create($data);
    }

    public function update($id, array $data)
    {
        $item = HrSolution::find($id);
        if (!$item) return null;

        $item->update($data);
        return $item;
    }

    public function delete($id)
    {
        $item = HrSolution::find($id);
        if (!$item) return false;

        $item->delete();
        return true;
    }
}
