<?php

namespace App\General\Abstracts;

use App\General\Interfaces\IEnum;


abstract class AppEnum implements IEnum
{
    protected static $enum;

    public static function getIdByValue($value)
    {
        return static::$enum[$value];
    }

    public static function getValueById($id)
    {
        return array_search($id,static::$enum,true);
    }

    public static function getEnum()
    {
        return static::$enum;
    }
}
