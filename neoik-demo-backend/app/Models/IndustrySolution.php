<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class IndustrySolution extends Model
{
    use HasFactory,HasTranslations;

    protected $fillable = [
        'badge', 'title', 'subtitle', 'manufacturing', 'healthcare', 'retail'
    ];

    public $translatable = [
        'badge', 'title', 'subtitle', 'manufacturing', 'healthcare', 'retail'
    ];
}
