<?php

require_once 'iFigure.php';

class Rectangle implements iFigure
{

    private float $square;
    private float $perimeter;

    public function __construct(float $square, float $perimeter)
    {
        $this->square = $square;
        $this->perimeter = $perimeter;
    }

    public function getSquare(): float
    {
        return $this->square;
    }

    public function getPerimeter(): float
    {
        return $this->perimeter;
    }
}