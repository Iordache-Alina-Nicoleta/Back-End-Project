<?php

namespace App\General\Concretes;


use App\General\Abstracts\CategEnum;

class CategStatus extends CategEnum
{
    public const ENABLE = 'enable';
    public const DISABLE = 'disable';
    

    public const ENABLE_ID = 1;
    public const DISABLE_ID = 0;
    

    protected static $enumm = [
        self::ENABLE => self::ENABLE_ID,
        self::DISABLE => self::DISABLE_ID
    ];
}

