<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Hero extends Model
{
    use HasFactory, HasTranslations;

    protected $fillable = [
        'badge',
        'title',
        'title_highlight',
        'subtitle',
        'button_text',
        'trusted_by',
        // Diğer alanlar
    ];

    public $translatable = [
        'badge',
        'title',
        'title_highlight',
        'subtitle',
        'button_text',
        'trusted_by',
        // Diğer alanlar
    ];
}
