<?php

require_once 'Employee.php';

$employee = new Employee();

$employee->setName('Petr');
$employee->setAge(25);
$employee->setSalary(100);

var_dump($employee->getName());
var_dump($employee->getAge());
var_dump($employee->getSalary());
