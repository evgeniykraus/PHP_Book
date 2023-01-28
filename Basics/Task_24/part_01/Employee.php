<?php

class Employee
{
    public string $name;

    public int $salary;

    public function __construct($name, $salary)
    {
        $this->name = $name;
        $this->salary = $salary;
    }
}