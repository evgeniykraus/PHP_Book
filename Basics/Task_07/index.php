<?php
/*
 * Задача №1
 * Сделайте класс Employee, в котором будут следующие свойства: name, surname и salary.

 * Задача №2
 * Сделайте так, чтобы свойства name и surname были доступны только для чтения, а свойство salary - и для чтения, и для записи.

 * */

class Employee
{
    private $name;

    private $surname;
    private $salary;

    public function getName(): string
    {
        return $this->name;
    }

    public function getSurname(): string
    {
        return $this->surname;
    }

    public function getSalary(): int
    {
        return $this->salary;
    }

    public function setSalary(int $salary): void
    {
        $this->$salary = $salary;
    }
}