<?php

namespace App\Repositories;

use App\Models\Nav;
use Illuminate\Database\Eloquent\Model;

class NavRepository extends BaseRepository
{
    protected function model(): Model
    {
        return new Nav();
    }
}
