<?php

/*
 * Задача №1
 * Сделайте класс Employee, в котором будут следующие публичные свойства - name, age, salary. Сделайте так, чтобы эти свойства заполнялись в конструкторе при создании объекта.

 * Задача №2
 * Создайте объект класса Employee с именем 'eric', возрастом 25, зарплатой 1000.

 * Задача №3
 * Создайте объект класса Employee с именем 'kyle', возрастом 30, зарплатой 2000.

 * Задача №4
 * Выведите на экран сумму зарплат созданных вами юзеров.

 * */

class Employee
{
    public $name;
    public $age;
    public $salary;

    public function __construct(string $name, int $age, int $salary)
    {
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }
}

$employee_1 = new Employee('eric', 25, 1000);
$employee_2 = new Employee('kyle', 30, 2000);

var_dump($employee_1->salary + $employee_2->salary);