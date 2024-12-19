<?php

namespace App\Models;

use App\Casts\MoneyCast;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Transaction extends Model
{
    protected $fillable = [
        'order_id',
        'payment_method',
        'payment_system_transaction_id', 'payment_link',
        'amount',
        'status',
    ];

    protected function casts(): array
    {
        return [
            'amount' => MoneyCast::class,
            'status' => TransactionStatusEnum::class,
        ];
    }

    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }
}
