<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Testimonial extends Model
{
    use HasFactory,  HasTranslations;

    protected $fillable = [
        'badge', 'title', 'subtitle', 'cta', 'mehmet', 'semih', 'abdurrahman'
    ];

    public $translatable = [
        'badge', 'title', 'subtitle', 'cta', 'mehmet', 'semih', 'abdurrahman'
    ];
}
