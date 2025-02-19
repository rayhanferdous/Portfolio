<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HeroSection extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'hero_small_title',
        'hero_title',
        'hero_image',
        'years_of_experience',
        'number_of_awards',
        'number_of_pubs',
        'number_of_published_news',
    ];
}
