<?php

namespace App\Repositories;

use App\Models\HrSolution;

class HrSolutionsRepository
{
    public function all()
    {
        return HrSolution::all();
    }

    public function find($id)
    {
        return HrSolution::findOrFail($id);
    }

    public function create(array $data)
    {
        return HrSolution::create($data);
    }

    public function update($id, array $data)
    {
        $hrSolution = HrSolution::findOrFail($id);
        $hrSolution->update($data);
        return $hrSolution;
    }

    public function delete($id)
    {
        $hrSolution = HrSolution::findOrFail($id);
        $hrSolution->delete();
        return true;
    }
}
