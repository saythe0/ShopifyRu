<?php

namespace App\Enums;

enum TransactionStatusEnum: int
{
    case PENDING = 1;
    case COMPLETED = 2;
    case FAILED = 3;
    case REFUNDED = 4;
    case CANCELED = 5;

    public function label(): string
    {
        return match ($this) {
            self::PENDING => 'Ожидает обработки',
            self::COMPLETED => 'Завершено',
            self::FAILED => 'Не удалось',
            self::REFUNDED => 'Возвращено',
            self::CANCELED => 'Отменено',
        };
    }
}
