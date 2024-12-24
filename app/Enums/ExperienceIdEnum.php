<?php

namespace App\Enums;

enum ExperienceIdEnum: int
{
    case NO_EXPERIENCE = 1;
    case BEETWEEN_1_AND_3 = 2;
    case BEETWEEN_3_AND_6 = 3;
    case MORE_THAN_6 = 4;

    public function getNamesMap(): string
    {
        return match ($this) {
            self::NO_EXPERIENCE => 'Нет опыта',
            self::BEETWEEN_1_AND_3 => 'От 1 года до 3 лет',
            self::BEETWEEN_3_AND_6 => 'От 3 до 6 лет',
            self::MORE_THAN_6 => 'Более 6 лет',
        };
    }
}
