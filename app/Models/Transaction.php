<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id', 'payment_method', 'payment_system_transaction_id', 'payment_link', 'amount', 'status'
    ];

    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }
}
