<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

final class CategoryType extends Enum
{
    const CategoryOne = 1;
    const OptionTwo = 2;
    const OptionThree = 3;

    /**
     * Get the description for an enum value
     *
     * @param  int  $value
     * @return string
     */
    public static function getDescription(int $value): string
    {
        switch ($value) {
            case self::CategoryOne:
                return 'Piłka nożna';
            case self::OptionTwo:
                return 'Buty';
            case self::OptionThree:
                return 'koszulki';
            break;
            default:
                return self::getKey($value);
        }
    }
}
