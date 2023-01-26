<?php

class Geometry
{
    public static float $pi = 3.14;

    public static function getCircleSquare(float $radius): float|int
    {
        return self::$pi * pow($radius, 2);

    }

    public static function getCircleCircuit(float $radius): float|int
    {
        return 2 * self::$pi * $radius;
    }

    public static function getVolumeSphere(float $radius): float|int
    {
        return 4 / 3 * self::$pi * pow($radius, 3);
    }
}