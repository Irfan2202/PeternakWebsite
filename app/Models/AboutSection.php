<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AboutSection extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'image_alt',
        'section_name',
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
