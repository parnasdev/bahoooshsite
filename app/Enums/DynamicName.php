<?php

namespace App\Enums;

trait DynamicName
{
    public static function fromName(string $name){

        return constant("self::$name");
    }
}
