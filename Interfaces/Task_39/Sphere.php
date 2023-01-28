<?php

require_once 'iSphere.php';

class Sphere implements iSphere
{
    private float $radius;

    public function __construct(float $radius)
    {
        $this->radius = $radius;
    }

    public function getVolume(): float
    {
        return 4 / 3 * self::PI * pow($this->radius, 3);
    }

    public function getSquare(): float
    {
        return 4 * self::PI * pow($this->radius, 2);
    }
}