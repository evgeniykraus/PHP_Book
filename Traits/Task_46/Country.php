<?php

require_once 'Helper.php';

class Country
{
    use Helper;

    private string $name;
    private int $age;
    private int $population;

    public function __construct(string $name, int $age, int $population)
    {
        $this->name = $name;
        $this->age = $age;
        $this->population = $population;
    }

    public function getPopulation(): int
    {
        return $this->population;
    }
}