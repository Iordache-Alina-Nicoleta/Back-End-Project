<?php

namespace App\General\Abstracts;

use App\General\Interfaces\IEnumm;

abstract class CategEnum implements IEnumm
{
    protected static $enumm;

    public static function getIdByValue($value)
    {
        return static::$enumm[$value];
    }

    public static function getValueById($id)
    {
        return array_search($id,static::$enumm,true);
    }

    public static function getEnumm()
    {
        return static::$enumm;
    }
}