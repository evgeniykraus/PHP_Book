<?php

abstract class Figure
{
    public function getSquarePerimeterSum(): float
    {
        return $this->getSquare() + $this->getPerimeter();
    }

    abstract public function getSquare();

    abstract public function getPerimeter();
}