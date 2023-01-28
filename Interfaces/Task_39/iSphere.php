<?php

interface iSphere
{
    const PI = 3.14159265359;

    // Конструктор шара:
    public function __construct(float $radius);

    // Метод для нахождения объема шара:
    public function getVolume(): float;

    // Метод для нахождения площади поверхности шара:
    public function getSquare(): float;
}