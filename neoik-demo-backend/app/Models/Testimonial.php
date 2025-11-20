<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;
    protected $fillable = [
        'badge', 'title', 'subtitle', 'cta', 'mehmet', 'semih', 'abdurrahman'
    ];
}
