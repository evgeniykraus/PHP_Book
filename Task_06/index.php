<?php

/*
 * Задача №1
 * Сделайте класс Employee, в котором будут следующие приватные свойства: name, age и salary.

 * Задача №2
 * Сделайте геттеры и сеттеры для всех свойств класса Employee.

 * Задача №3
 * Дополните класс Employee приватным методом isAgeCorrect, который будет проверять возраст на корректность (от 1 до 100 лет).
 * Этот метод должен использоваться в сеттере setAge перед установкой нового возраста (если возраст не корректный - он не должен меняться).

 * Задача №4
 * Пусть зарплата наших работников хранится в долларах. Сделайте так, чтобы геттер getSalary добавлял в конец числа с зарплатой значок доллара.
 * Говоря другими словами в свойстве salary зарплата будет хранится просто числом, но геттер будет возвращать ее с долларом на конце.

 * */

class Employee
{
    private $name;
    private $age;
    private $salary;

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function setAge(int $age): void
    {
        if ($this->isAgeCorrect($age)) {
            $this->age = $age;
        }
    }

    public function setSalary(int $salary): void
    {
        $this->salary = $salary;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function getSalary(): string
    {
        $currency = '$';
        return $this->salary . '' . $currency;
    }

    private function isAgeCorrect($age): bool
    {
        return $age >= 1 && $age <= 100;
    }
}

$employee = new Employee();

$employee->setName('Erick');
var_dump($employee->getName());

$employee->setAge(125);
var_dump($employee->getAge());

$employee->setSalary(200);
var_dump($employee->getSalary());
//
//$employee->setAge(15);
//var_dump($employee->getAge());