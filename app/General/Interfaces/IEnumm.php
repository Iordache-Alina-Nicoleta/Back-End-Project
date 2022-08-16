<?php

namespace App\General\Interfaces;

interface IEnumm
{
    public static function getValueById($id);
    public static function getIdByValue($value);
    public static function getEnumm();
}