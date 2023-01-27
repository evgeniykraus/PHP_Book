<?php

class Rectangle extends Figure
{
    private float $a;
    private float $b;

    public function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
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