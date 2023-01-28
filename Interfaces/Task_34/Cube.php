<?php

require_once 'iCube.php';

class Cube implements iCube
{
    private float $side;

    public function __construct(float $side)
    {
        $this->side = $side;
    }

    public function getVolume(): float
    {
        return pow($this->side, 3);
    }

    public function getArea(): float
    {
        return 6 * pow($this->side, 3);
    }


}