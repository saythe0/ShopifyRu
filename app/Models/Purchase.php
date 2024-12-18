<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Purchase extends Model
{
    use HasFactory;

    protected $fillable = [
        'shop_id', 'purchasable_id', 'purchasable_type', 'amount'
    ];

    public function shop(): BelongsTo
    {
        return $this->belongsTo(Shop::class);
    }

    public function purchasable(): MorphTo
    {
        return $this->morphTo();
    }
}
