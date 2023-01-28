<?php

require_once 'iTetragon.php';
require_once 'iFigure.php';

class Rectangle implements iTetragon, iFigure
{
    private float $a;
    private float $b;

    public function __construct(float $a, float $b)
    {
        $this->a = $a;
        $this->b = $b;
    }

    public function getA(): float
    {
        return $this->a;
    }

    public function getB(): float
    {
        return $this->b;
    }

    public function getC(): float
    {
        return $this->a;
    }

    public function getD(): float
    {
        return $this->b;
    }

    public function getSquare(): float
    {
        return $this->a * $this->b;
    }

    public function getPerimeter(): float
    {
        return 2 * ($this->a * $this->b);
    }
}