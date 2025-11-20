<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HrSolution extends Model
{
    use HasFactory;
    protected $fillable = [
        'badge', 'title', 'subtitle', 'personnel', 'financial', 'leave', 'document', 'inventory', 'performance', 'cta'
    ];
}
