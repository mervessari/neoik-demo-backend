
<?php

namespace App\Repositories;

use App\Models\Hero;
use Illuminate\Database\Eloquent\Model;

class HeroRepository extends BaseRepository
{
    protected function model(): Model
    {
        return new Hero();
    }

    public function existsBadge(?string $badge): bool
    {
        if (!$badge) {
            return false;
        }
        return Hero::where('badge', $badge)->exists();
    }
}
    {

