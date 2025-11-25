<?php

namespace App\Repositories;

use App\Models\IndustrySolution;
use Illuminate\Database\Eloquent\Model;

class IndustrySolutionsRepository extends BaseRepository
{
    protected function model(): Model
    {
        return new IndustrySolution();
    }
}
