<?php

class UsersCollection
{
    private array $employees = array();
    private array $students = array();

    public function add(object $obj): void
    {
        $obj instanceof Student ? $this->students[] = $obj : $this->employees[] = $obj;
    }

    public function getTotalSalary(): float
    {
        $salarySum = 0;
        foreach ($this->employees as $employee) {
            $salarySum += $employee->getSalary();
        }
        return $salarySum;
    }

    public function getTotalScholarship(): float
    {
        $scholarshipSum = 0;
        foreach ($this->students as $student) {
            $scholarshipSum += $student->getScholarship();
        }
        return $scholarshipSum;
    }

    public function getTotalSum(): float
    {
        return $this->getTotalSalary() + $this->getTotalScholarship();
    }
}