<?php

require_once 'Figure3d.php';

class Cube implements Figure3d
{
    private float $volume;
    private float $surfaceSquare;

    public function __construct(float $volume, float $surfaceSquare)
    {
        $this->volume = $volume;
        $this->surfaceSquare = $surfaceSquare;
    }

    public function getVolume(): float
    {
        return $this->volume;
    }

    public function getSurfaceSquare(): float
    {
        return $this->surfaceSquare;
    }
}