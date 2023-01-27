<?php

class Employee extends User
{
    private int $salary;

    public function __construct(string $name, int $salary)
    {
        $this->salary = $salary;
        parent::__construct($name);
    }

    public function getSalary(): int
    {
        return $this->salary;
    }

    public function setSalary($salary): void
    {
        $this->salary = $salary;
    }

    public function increaseRevenue($value): void
    {
        $this->salary += $value;
    }

    public function decreaseRevenue($value): void
    {
        $this->salary -= $value;
    }
}