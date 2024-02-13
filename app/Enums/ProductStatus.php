<?php declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

final class ProductStatus extends Enum
{
    const PUBLISHED = 1;
    const DRAFT = 2;
    const ARCHIVED = 3;

    public static function getDescription($value): string
    {
        if ($value === self::PUBLISHED) {
            return 'Published';
        }

        if ($value === self::DRAFT) {
            return 'Draft';
        }

        if ($value === self::ARCHIVED) {
            return 'Archived';
        }

        return parent::getDescription($value);
    }

    public static function getValue(string $key)
    {
        if ($key === 'Published') {
            return self::PUBLISHED;
        }

        if ($key === 'Draft') {
            return self::DRAFT;
        }

        if ($key === 'Archived') {
            return self::ARCHIVED;
        }

        return parent::getValue($key);
    }
}
