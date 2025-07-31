<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class HeroSection extends Model
{
    use HasFactory;



    protected $fillable = [
        'image',
        'tagline',
        'title',
        'description',
        'button_text',
        'button_link',
    ];
    public function getImageUrlAttribute(): string
    {
        return asset('storage/' . $this->image);
    }
}
