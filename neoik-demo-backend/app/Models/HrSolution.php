<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class HrSolution extends Model
{
    use HasFactory, HasTranslations;

    protected $fillable = [
        'badge', 'title', 'subtitle', 'personnel', 'financial', 'leave', 'document', 'inventory', 'performance', 'cta'
    ];

    public $translatable = [
        'badge', 'title', 'subtitle', 'personnel', 'financial', 'leave', 'document', 'inventory', 'performance', 'cta'
    ];
}
