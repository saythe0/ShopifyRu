<?php

namespace App\Enums;

enum OrderStatusEnum: int
{
    case PENDING_PAYMENT = 1;
    case COMPLETED_PAYMENT = 2;
    case PENDING = 3;
    case COMPLETED = 4;
    case CANCELED = 5;

    public function label(): string
    {
        return match ($this) {
            self::PENDING_PAYMENT => 'Ожидает оплаты',
            self::COMPLETED_PAYMENT => 'Оплачен',
            self::PENDING => 'Ожидает обработки',
            self::COMPLETED => 'Завершен',
            self::CANCELED => 'Отменен',
        };
    }
}
