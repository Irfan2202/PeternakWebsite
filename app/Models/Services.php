<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Testing\Fluent\Concerns\Has;

class Services extends Model
{
    use HasFactory;
    protected $fillable = [
        'icon_class',
        'title',
        'description',
    ];
}
