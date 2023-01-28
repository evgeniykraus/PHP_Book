<?php
/*
 * Задача №1
 * Сделайте класс Employee (работник), в котором будут следующие свойства - name (имя), age (возраст), salary (зарплата).
*/
class Employee
{
    public $name;
    public $age;
    public $salary;
}

/*
 * Задача №2
 * Создайте объект класса Employee, затем установите его свойства в следующие значения - имя 'john', возраст 25, зарплата 1000.
 * */

$employee_1 = new Employee();
$employee_1->name = 'john';
$employee_1->age = 25;
$employee_1->salary = 1000;

/*
 * Задача №3
 * Создайте второй объект класса Employee, установите его свойства в следующие значения - имя 'eric', возраст 26, зарплата 2000.
 * */

$employee_2 = new Employee();
$employee_2->name = 'eric';
$employee_2->age = 26;
$employee_2->salary = 2000;

/*
 * Задача №4
 * Выведите на экран сумму зарплат созданных юзеров.
 * */

var_dump($employee_1->salary + $employee_2->salary);

/*
 * Задача №5
 * Выведите на экран сумму возрастов созданных юзеров.
 * */

var_dump($employee_1->age + $employee_2->age);