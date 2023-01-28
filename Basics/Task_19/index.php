<?php

require_once 'User.php';
require_once 'Student.php';
require_once 'Employee.php';


$student = new Student('Nurik', 'Shtraus', '1999-08-11', 2);

var_dump($student->getName());
var_dump($student->getSurname());
var_dump($student->getAge());
var_dump($student->getCourse());
var_dump($student->getBirthday());


$employee = new Employee('Lina', 'Tup', '1970-08-11', 200);

var_dump($employee->getName());
var_dump($employee->getSurname());
var_dump($employee->getAge());
var_dump($employee->getBirthday());
var_dump($employee->getSalary());
