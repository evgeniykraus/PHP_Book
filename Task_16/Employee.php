<?php

class Employee extends User
{
    private $salary;

    public function getSalary(): int
    {
        return $this->salary;
    }

    public function setSalary($salary): void
    {
        $this->salary = $salary;
    }
}