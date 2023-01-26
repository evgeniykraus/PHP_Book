<?php

class Employee extends User
{
    public float $salary;

    public function __construct(string $name, string $surname, float $salary)
    {
        $this->salary = $salary;
        parent::__construct($name, $surname);
    }
}