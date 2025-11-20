<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IndustrySolution extends Model
{
    use HasFactory;
    protected $fillable = [
        'badge', 'title', 'subtitle', 'manufacturing', 'healthcare', 'retail'
    ];
}
