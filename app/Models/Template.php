<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Template extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'slug', 'price', 'description', 'is_active'
    ];

    public function shops(): HasMany
    {
        return $this->hasMany(Shop::class);
    }
}
