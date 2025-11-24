<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Nav extends Model
{
    use HasFactory, HasTranslations;

    protected $fillable = [
        'hr_solutions', 'industry_solutions', 'clients', 'contact'
    ];

    public $translatable = [
        'hr_solutions', 'industry_solutions', 'clients', 'contact'
    ];
}
