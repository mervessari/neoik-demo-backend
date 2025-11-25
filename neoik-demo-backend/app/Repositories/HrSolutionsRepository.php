<?php

namespace App\Repositories;

use App\Models\HrSolution;
use Illuminate\Database\Eloquent\Model;

class HrSolutionsRepository extends BaseRepository
{
    protected function model(): Model
    {
        return new HrSolution();
    }
}
