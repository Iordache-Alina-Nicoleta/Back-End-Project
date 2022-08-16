<?php

namespace App\General\Concretes;

use App\General\Abstracts\AppEnum;


class BookStatus extends AppEnum
{
    public const RETURNED = 'returned';
    public const NOT_RETURNED = 'not returned';
    

    public const RETURNED_ID = 1;
    public const NOT_RETURNED_ID = 0;
    

    protected static $enum = [
        self::RETURNED => self::RETURNED_ID,
        self::NOT_RETURNED => self::NOT_RETURNED_ID
    ];
}
