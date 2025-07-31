<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'button_text',
        'button_link'
    ];
    public function features()
    {
        return $this->hasMany(Feature::class);
    }
}
