<?php

class EmployeesCollection
{
    private array $employees = array();

    public function add(object $employee): void
    {
        if (!$this->exists($employee)) {
            $this->employees[] = $employee;
        }
    }

    private function exists(object $employee): bool
    {
        return in_array($employee, $this->employees);
    }
}