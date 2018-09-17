<?php

namespace App\Filter;

use phpDocumentor\Reflection\Types\Self_;

class Filter
{
    const SERVICE_FILTER = 'service';
    const STATUS_CODE_FILTER = 'statusCode';
    const FROM_DATE_TIME_FILTER = 'fromDateTime';
    const TO_DATE_TIME_FILTER = 'toDateTime';

    const ALLOWED_FILTERS = [
        self::SERVICE_FILTER,
        self::STATUS_CODE_FILTER,
        self::FROM_DATE_TIME_FILTER,
        self::TO_DATE_TIME_FILTER,
    ];

    /**
     * @param string $filter
     * @return bool
     */
    public static function isFilterValid(string $filter): bool
    {
        return in_array($filter, self::ALLOWED_FILTERS);
    }
}