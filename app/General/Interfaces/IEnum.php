<?php

namespace App\General\Interfaces;

interface IEnum
{
    public static function getValueById($id);
    public static function getIdByValue($value);
    public static function getEnum();
}


