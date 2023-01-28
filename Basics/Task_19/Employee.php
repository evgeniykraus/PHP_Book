<?php

class Employee extends User
{
    private int $salary;

    public function __construct(string $name, string $surname, string $birthday, int $salary)
    {
        $this->salary = $salary;
        parent::__construct($name, $surname, $birthday);
    }

    public function getSalary(): int
    {
        return $this->salary;
    }
}