<?php

require_once 'User.php';
require_once 'Employee.php';
require_once 'Student.php';
require_once 'Programmer.php';
require_once 'Driver.php';


$employee = new Employee();

$employee->setName('Erick');
$employee->setSalary(200);
$employee->setAge(20);

var_dump($employee->getName());
var_dump($employee->getSalary());
var_dump($employee->getAge());


$student = new Student();

$student->setName('Nurik');
$student->setAge(30);
$student->setCourse(1);

var_dump($student->getName());
var_dump($student->getAge());
var_dump($student->getCourse());


$programmer = new Programmer();

$programmer->setName('Frick');
$programmer->setAge(20);
$programmer->setLangs(['HPH', 'SJ']);

var_dump($programmer->getName());
var_dump($programmer->getAge());
var_dump($programmer->getLangs());

$programmer->setSalary(123);
var_dump($programmer->getSalary());


$driver = new Driver();

$driver->setName('Shurik');
$driver->setAge(44);
$driver->setDrivingExp(19);
$driver->setDrivingCategory(['A', 'B', 'C', 'D']);

var_dump($driver->getName());
var_dump($driver->getAge());
var_dump($driver->getDrivingExp());
var_dump($driver->getDrivingCategory());