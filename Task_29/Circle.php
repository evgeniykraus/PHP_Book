<?php

class Circle
{
    const PI = 3.14;
    private float $radius;

    public function __construct(float $radius)
    {
        $this->radius = $radius;
    }

    // Найдем площадь:
    public function getSquare(): float
    {
        return self::PI * pow($this->radius, 2);
    }

    // Найдем длину окружности:
    public function getCircuit(): float
    {
        return 2 * self::PI * $this->radius;
    }
}