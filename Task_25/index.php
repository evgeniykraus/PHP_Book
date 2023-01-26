<?php

require_once 'Post.php';
require_once 'Employee.php';

$programmer = new Post('Программист', 10);
$manager = new Post('Менеджер', 20);
$carDriver = new Post('Водитель', 5);

$employee = new Employee('Vasya', 'Petrov', $programmer);

echo "{$employee->getName()} {$employee->getSurname()} {$employee->post->getName()} {$employee->post->getSalary()} <br>";

$employee->changePost($manager);

echo "{$employee->getName()} {$employee->getSurname()} {$employee->post->getName()} {$employee->post->getSalary()} <br>";
