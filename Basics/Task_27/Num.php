<?php

class Num
{
    public static int $num1 = 2;
    public static int $num2 = 3;
    private static int $num3 = 2;
    private static int $num4 = 3;

    public static function getSum(): int
    {
        return self::$num3 + self::$num4;
    }
}