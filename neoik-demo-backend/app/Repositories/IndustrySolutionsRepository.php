<?php

namespace App\Repositories;

use App\Models\IndustrySolution;

class IndustrySolutionsRepository
{
    public function all()
    {
        return IndustrySolution::all();
    }

    public function find($id)
    {
        return IndustrySolution::findOrFail($id);
    }

    public function create(array $data)
    {
        return IndustrySolution::create($data);
    }

    public function update($id, array $data)
    {
        $industrySolution = IndustrySolution::findOrFail($id);
        $industrySolution->update($data);
        return $industrySolution;
    }

    public function delete($id)
    {
        $industrySolution = IndustrySolution::findOrFail($id);
        $industrySolution->delete();
        return true;
    }
}
