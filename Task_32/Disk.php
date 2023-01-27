<?php

class Disk implements iFigure
{
    const PI = 3.14;
    private float $radius;

    public function __construct(float $radius)
    {
        $this->radius = $radius;
    }

    public function getSquare(): float
    {
        return self::PI * pow($this->radius, 2);
    }

    public function getPerimeter(): float
    {
        return 2 * self::PI * $this->radius;
    }
}