<?php

require_once 'iFigure.php';
require_once 'iCircle.php';

class Disk implements iCircle, iFigure
{
    const PI = 3.14;
    private float $radius;

    public function __construct(float $radius)
    {
        $this->radius = $radius;
    }

    public function getRadius(): float
    {
        return $this->radius;
    }

    public function getDiameter(): float
    {
        return 2 * $this->radius;
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