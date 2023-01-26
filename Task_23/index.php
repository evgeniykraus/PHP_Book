<?php

require_once 'User.php';
require_once 'Employee.php';
require_once 'EmployeesCollection.php';
require_once 'compare.php';

$user = new User('user');
$user1 = new User('user');
//var_dump(compare($user, $user1));

$employeeCollection = new EmployeesCollection();

$employeeCollection->add(new Employee('Employee1', 11));
$employeeCollection->add(new Employee('Employee1', 11));
$employeeCollection->add(new Employee('Employee1', 11));
$employeeCollection->add(new Employee('Employee1', 11));
$employeeCollection->add(new Employee('Employee1', 11));
$employeeCollection->add(new Employee('Employee1', 22));
$employeeCollection->add(new Employee('Employee2', 33));

var_dump($employeeCollection);