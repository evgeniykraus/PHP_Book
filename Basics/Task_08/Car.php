<?php

class Car
{
    public $color;
    public $price;

    public function __construct(string $color, int $price)
    {
        $this->color = $color;
        $this->price = $price;
    }
}