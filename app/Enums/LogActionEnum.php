<?php

namespace App\Enums;

enum LogActionEnum: int
{
    case LOGIN = 1;
    case LOGOUT = 2;

    public function label(): string
    {
        return match ($this) {
            self::LOGIN => 'Вход в аккаунт',
            self::LOGOUT => 'Выход из аккаунта',
        };
    }
}
