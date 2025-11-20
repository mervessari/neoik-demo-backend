<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{
    use HasFactory;

    protected $fillable = [
        'badge',
        'title',
        'title_highlight',
        'subtitle',
        'button_text',
        'trusted_by',
        // Diğer alanlar
    ];
}
