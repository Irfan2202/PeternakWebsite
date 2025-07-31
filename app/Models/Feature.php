<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Feature extends Model
{
    use HasFactory;

    protected $fillable = [
        'package_id',
        'name',
    ];
    public function package()
    {
        return $this->belongsTo(Package::class);
    }
}
